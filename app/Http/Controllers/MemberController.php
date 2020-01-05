<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Team;
use App\Album;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = Team::all();
        return view('admin.members.allmember', compact('members'));
    }


    public function changestatus($id)
    {
        $data = Team::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Member status changed!']);
    }


    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(),[
            'album_id' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg'
        ]);
        if (!$validation->fails()) {
        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/team-member-image',$imageName);
                Team::insert([
                            'caption'=>  $request->caption,
                            'album_id'=>  $request->album_id,
                            'image' => $imageName,
                            'status' =>  $status
                        ]);
                DB::commit();
                return back()->with(['alert-type' => 'success','message' => 'Member Added successfull']);
            }
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
        }
    }
    return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }

    public function show($id)
    {
       $data = Team::find($id);
        return view('admin.members.showmember',compact('data'));
    }

  
    public function edit($id)
    {
        $albums = Album::where('status',1)->get();
        $data = Team::find($id);
        return view('admin.members.editmember',compact('data','albums'));
    }

	public function update(Request $request, $id)
	{
	    $status = $request->status ? 1 : 0;
    	   try {
    	        DB::beginTransaction();
    	        $updated = Team::find($id);
    	                $updated->album_id =  $request->album_id;
                        $updated->caption  =  $request->caption;
    	                $updated->status   =  $status;
    	            $updated->update();

    	        if ($request->hasFile('image')) {
                   $validation = Validator::make($request->all(),[
                        'image' => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg'
                    ]);
                    if (!$validation->fails()) {
            	        if(!empty($updated->image) && file_exists('images/team-member-image/'.$updated->image)){      
            	            unlink('images/team-member-image/'.$updated->image);
            	        }
            	            $image = $request->file('image');
            	            $imageName = time().'.'.$image->getClientOriginalExtension();
            	            $image->move('images/team-member-image',$imageName);

            	            Team::where('id', $updated->id)
            	                    ->update([
            	                        'image' => $imageName
            	                    ]);
        	        } else {
                        return back()->with(['alert-type' => 'error','message' => 'Validaton error Occured!']);
                    }
                
                }
    	           DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Member Updated successfull']);             
    	    } catch (Exception $e) {
    	        DB::rollback();
    	        return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
    	    }

	}


    public function destroy($id)
    {
        $data = Team::find($id);
            if(!empty($data->image) && file_exists('images/team-member-image/'.$data->image)){      
                unlink('images/team-member-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
    }

    public function getMember()
    {
        $albums = Album::where('status',1)->get();
        return view('admin.members.addmember',['albums' => $albums]);
        // return "hiee";
    }
}
