<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 'Hello';
        $album = Album::all();
        return view('admin.gallery.album.album',['albums' => $album]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'hi';
        return view('admin/gallery/album/addAlbum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(),[
            'name' => 'required'
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                Album::create($request->all());
                DB::commit();
                return back()->with(['alert-type' => 'success','message' => 'Album Created successfull']);
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
        }
       return back()->withErrors(['error',$validation->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id)
    {
        $data = Album::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Album status changed!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = Album::find($id);
        return view('admin/gallery/album/editalbum',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $status = $request->status ? 1 : 0;
            $validation = Validator::make($request->all(),[
                'name' => 'required'
            ]);
            if (!$validation->fails()) {
                try {
                    DB::beginTransaction();
                    $updated = Album::find($id);
                        $updated->name  =  $request->name;
                        $updated->status   =  $status;
                    $updated->update();

                    DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Album Updated successfull']);
                } catch (Exception $e) {
                    DB::rollback();
                    return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
                }
            }
        return back()->withErrors(['error',$validation->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = Album::find($id);
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
    }
}
