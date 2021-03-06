<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Gallery;
use App\Blog;
use App\Priceplan;
use App\Userquery;
use App\Album;
use App\Member;
use App\custom\Helper;
use DB;
use Session;

class FrontController extends Controller
{
    public function index()
    {
        $albums = Album::where('status',1)->get();
    	$galleries =  Gallery::where('status',1)->get();
    	$blogs 		  =  Blog::where('status',1)->take(2)->latest()->get();
        $paidServices   =  Service::where(['status'=>1,'type'=>'সল্পমূল্যে'])->get();
        $freeServices   =  Service::where(['status'=>1,'type'=>'বিনামূল্যে'])->get();
        // Session::flush();
    	return view('setup.setup',compact('galleries','albums','blogs','paidServices','freeServices'));
    }

    public function getSpecificService($slug)
    {
    	$services 	 = Service::where('slug',$slug)->first();
    	$allservices = Service::where('status',1)->get();
    	$blogs 		 =  Blog::where('status',1)->get();
    	return view('pages.viewService', compact('services','allservices','blogs'));
    }

    public function getSpecificBlog($slug)
    {
    	$blog 		 = Blog::where('slug',$slug)->first();
    	$allservices = Service::where('status',1)->get();
    	$allblogs 	 =  Blog::where('status',1)->get();
    	return view('pages.viewBlog', compact('allblogs','allservices','blog'));
    }

    public function AllMember()
    {
        $members =  Member::where('status',1)->Paginate(5);
        return view('pages.member', compact('members'));
    }

    public function getAllBlog()
    {
        $allblogs =  Blog::where('status',1)->latest()->Paginate(5);
        return view('pages.allblog', compact('allblogs'));
    }

    public function SaveForm(Request $request)
    {
        // return $request->all();
        $validation = Validator::make($request->all(),[
            'service_id' => 'required',
            'name'       => 'required',
            'phone'      => 'required',
            'address'    => 'required',
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                $store = Userquery::insert([
                    'service_id' => $request->service_id,
                    'name'       => $request->name,
                    'phone'      => $request->phone,
                    'address'    => $request->address,
                    'message'    => $request->message
                ]);

                DB::commit();

                // For Mobile SMS
                $service = Service::find($request->service_id);
                $message = "$request->name asked for $service->title.Phone: $request->phone";

                Helper::send_sms('01304004000',$message,'UNICODE');

                // For Mail
                /*$to = "arifuzzaman.rb@gmail.com";
                $name = $request->name;
                $email = $request->email;
                $subject = $request->subject;
                Mail::send('contact.us',[ 'name'=>$request->name, 'phone'=>$request->phone, 'email'=>$request->email, 'subject' => $request->subject, 'user_message' => $request->message  ], 
                        function ($message) use ($to,$email,$name,$subject){
                            $message->from($email,$name);
                            $message->to($to)->subject($subject);
                   });*/

                return response()->json(['alertType' => 'success','message' => 'আপনার মেসেজটি পাঠানো হয়েছে।']);
                  
            }catch (Exception $e) {
                DB::rollback();
                return response()->json(['alertType' => 'error','message' => $e->errorInfo[2]]);
            }
                
        }
        return response()->json(['alertType' => 'error','message' => 'পূণঃবার সকল তথ্য সঠিকভাবে পূরণ করুন।']);
    }

    public function loadPhoto(Request $request)
    {
        // return $request->id;
        
        $data = Gallery::orderBy('id','desc')->where('status',1);

        if ($request->album_id != '') {
            
            $data->where('album_id','=',$request->album_id);
        }

       if ($request->is_firstime == 'yes'){
            
            $data->take(4);
        }
        return $data = $data->get();

        // return \View::make('ajax.ajax_photo',[
        //  'galleries' => $data
        // ]);

    }  

}
