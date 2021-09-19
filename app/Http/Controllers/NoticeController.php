<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;
use Illuminate\Support\Str;
use DB;

class NoticeController extends Controller
{
    public function index()
    {
    	$notice = Notice::where('status',1)->get();
    	return view('admin.notice.notice',['notices' => $notice]);
    }

    public function create()
    {
    	return view('admin.notice.addnotice');
    }

    public function changestatus($id)
    {
        $data = Member::find($id);
        $msg = '';
        if ($data->status == 0) {
            $data->status = 1;
            $msg .= 'Activated';
        } else {
            $data->status = 0;
            $msg .= 'Deactivated';
        }
        $data->update();
        return back()->with(['alert-type' => 'info', 'message' => 'Member status '.$msg]);
    }

    public function store(Request $request)
    {
        $status     = $request->status ? 1 : 0;
        $request->validate([
            'title'        => 'required',
            // 'short_description'  => 'required',
            'description'  => 'required',
            'image'        => 'nullable|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);
            try {
                DB::beginTransaction();
                $insertid = Notice::insertGetId([
                    'title'        => $request->title,
                    'slug' 		  => Str::slug($request->title),
                    'description' => $request->description,
                    'short_description' => $request->short_description,
                    'date' => date('Y-m-d H:i:s'),
                    'status'      => $status,
                ]);

                if ($request->hasFile('image')) {
                    $image     = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('images/notice', $imageName);

                    Notice::where('id', $insertid)
                        ->update([
                            'image' => $imageName,
                        ]);
                }
                DB::commit();
                return redirect()->route('notice.index')->with(['alert-type' => 'success', 'message' => 'Notice Added successfull']);

            } catch (\Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->getMessage()]);
            }
    }

    public function show($id)
    {
        $data = Notice::find($id);
        return view('admin.members.showmember', compact('data'));
    }

    public function edit($id)
    {
        // return $id;
        $data = Notice::find($id);
        return view('admin.notice.editnotice', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status     = $request->status ? 1 : 0;
        $request->validate([
            'title'        => 'required',
            // 'short_description'  => 'required',
            'description'  => 'required',
            'image'        => 'nullable|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);
            try {
                DB::beginTransaction();
                $update = Notice::find($id);
                $update->title        = $request->title;
                $update->slug 		  = Str::slug($request->title);
                $update->description = $request->description;
                $update->short_description = $request->short_description;
                $update->status      = $status;
               	$updated->update();

                if ($request->hasFile('image')) {
	                if (!empty($updated->image) && file_exists('images/notice/' . $updated->image)) {
	                    unlink('images/notice/' . $updated->image);
	                }
                    $image     = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('images/notice', $imageName);

                    Notice::where('id', $updated->id)
                    ->update([
                        'image' => $imageName,
                    ]);
                }
                DB::commit();
                return redirect()->route('notice.index')->with(['alert-type' => 'success', 'message' => 'Notice Updated successfull']);

            } catch (\Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->getMessage()]);
            }
    }

    public function destroy($id)
    {
        $data = Member::find($id);
        if (!empty($data->image) && file_exists('images/team-member-image/' . $data->image)) {
            unlink('images/team-member-image/' . $data->image);
        }
        $data->delete();
        return back()->with(['alert-type' => 'warning', 'message' => 'Data Deleted']);
    }

    public function getMember()
    {
        return view('admin.members.addmember');
        // return "hiee";
    }
}
