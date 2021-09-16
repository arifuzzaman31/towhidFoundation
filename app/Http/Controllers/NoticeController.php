<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

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
            'name'        => 'required',
            'designation' => 'required',
            'image'       => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);
            try {
                DB::beginTransaction();
                $insertid = Member::insertGetId([
                    'name'        => $request->name,
                    'designation' => $request->designation,
                    'fb_link'     => $request->fb_link,
                    'tw_link'     => $request->tw_link,
                    'inst_link'   => $request->inst_link,
                    'member_type' => $request->member_type,
                    'status'      => $status,
                ]);

                if ($request->hasFile('image')) {
                    $image     = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('images/team-member-image', $imageName);

                    Member::where('id', $insertid)
                        ->update([
                            'image' => $imageName,
                        ]);
                }
                DB::commit();
                return redirect()->route('team-member')->with(['alert-type' => 'success', 'message' => 'Member Added successfull']);

            } catch (\Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
            }
    }

    public function show($id)
    {
        $data = Member::find($id);
        return view('admin.members.showmember', compact('data'));
    }

    public function edit($id)
    {
        // return $id;
        $data = Member::find($id);
        return view('admin.members.editmember', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status     = $request->status ? 1 : 0;
        $request->validate([
            'name'        => 'required',
            'designation' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $updated              = Member::find($id);
            $updated->name        = $request->name;
            $updated->designation = $request->designation;
            $updated->fb_link     = $request->fb_link;
            $updated->tw_link     = $request->tw_link;
            $updated->inst_link   = $request->inst_link;
            $updated->member_type = $request->member_type;
            $updated->status      = $status;
            $updated->update();

            if ($request->hasFile('image')) {

                if (!empty($updated->image) && file_exists('images/team-member-image/' . $updated->image)) {
                    unlink('images/team-member-image/' . $updated->image);
                }
                $image     = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('images/team-member-image', $imageName);

                Member::where('id', $updated->id)
                    ->update([
                        'image' => $imageName,
                    ]);
            }
            DB::commit();
            return redirect()->route('team-member')->with(['alert-type' => 'success', 'message' => 'Member Updated successfull']);
        } catch (Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
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
