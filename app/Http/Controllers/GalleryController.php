<?php

namespace App\Http\Controllers;

use App\Album;
use App\Gallery;
use DB;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::orderBy('updated_at', 'desc')
            ->orderBy('album_id', 'desc')
            ->paginate(10);
        return view('admin.gallery.allphotos', compact('photos'));
    }

    public function changestatus($id)
    {
        $data = Gallery::find($id);
        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
        return back()->with(['alert-type' => 'info', 'message' => 'Photo status changed!']);
    }

    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        $request->validate([
            'album_id' => 'required',
            'image'    => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);

        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $image     = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('images/our-gallery', $imageName);
                Gallery::insert([
                    'caption'  => $request->caption,
                    'album_id' => $request->album_id,
                    'image'    => $imageName,
                    'status'   => $status,
                ]);
                DB::commit();
                return redirect()->route('photo-gallery')->with(['alert-type' => 'success', 'message' => 'Photo Added successfull']);
            }

        } catch (Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
        }
    }

    public function show($id)
    {
        $data = Gallery::find($id);
        return view('admin.gallery.showphoto', compact('data'));
    }

    public function edit($id)
    {
        $albums = Album::where('status', 1)->get();
        $data   = Gallery::find($id);
        return view('admin.gallery.editphoto', compact('data', 'albums'));
    }

    public function update(Request $request, $id)
    {
        $status = $request->status ? 1 : 0;
        try {
            DB::beginTransaction();
            $updated           = Gallery::find($id);
            $updated->album_id = $request->album_id;
            $updated->caption  = $request->caption;
            $updated->status   = $status;
            $updated->update();

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'nullable|image|mimes:jpeg,bmp,jpg,png,gif,svg',
                ]);

                if (!empty($updated->image) && file_exists('images/our-gallery/' . $updated->image)) {
                    unlink('images/our-gallery/' . $updated->image);
                }
                $image     = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('images/our-gallery', $imageName);

                Gallery::where('id', $updated->id)
                    ->update([
                        'image' => $imageName,
                    ]);
            }
            DB::commit();
            return redirect()->route('photo-gallery')->with(['alert-type' => 'success', 'message' => 'Photo Updated successfull']);

        } catch (Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
        }

    }

    public function destroy($id)
    {
        $data = Gallery::find($id);
        if (!empty($data->image) && file_exists('images/our-gallery/' . $data->image)) {
            unlink('images/our-gallery/' . $data->image);
        }
        $data->delete();
        return back()->with(['alert-type' => 'warning', 'message' => 'Data Deleted']);
    }

    public function getPhoto()
    {
        $albums = Album::where('status', 1)->get();
        return view('admin.gallery.addphoto', ['albums' => $albums]);
        // return "hiee";
    }
}
