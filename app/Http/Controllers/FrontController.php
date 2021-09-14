<?php

namespace App\Http\Controllers;

use App\Album;
use App\Blog;
use App\custom\Helper;
use App\Gallery;
use App\Member;
use App\Service;
use App\Userquery;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $albums = Album::where('status', 1)
            ->whereHas('latestImage')
            ->with('latestImage')
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();
        $galleries = Gallery::where('status', 1)->get();

        // Session::flush();
        return view('theme.pages.index', compact('galleries', 'albums'));
    }

    public function getSpecificService($slug)
    {
        $services    = Service::where('slug', $slug)->first();
        $allservices = Service::where('status', 1)->get();
        $blogs       = Blog::where('status', 1)->get();
        return view('pages.viewService', compact('services', 'allservices', 'blogs'));
    }

    public function getSpecificBlog($slug)
    {
        $blog        = Blog::where('slug', $slug)->first();
        $allservices = Service::where('status', 1)->get();
        $allblogs    = Blog::where('status', 1)->get();
        return view('pages.viewBlog', compact('allblogs', 'allservices', 'blog'));
    }

    public function AllMember()
    {
        $executive_members = Member::where('status', 1)->where('member_type', 1)->get();
        $advisor           = Member::where('status', 1)->where('member_type', 0)->get();
        return view('theme.pages.member', compact('executive_members', 'advisor'));
    }

    public function getAllBlog()
    {
        $blog = Blog::where('status', 1)->latest()->Paginate(8);
        return view('theme.pages.blog', compact('blog'));
    }

    public function SaveForm(Request $request)
    {
        // return $request->all();
        $validation = Validator::make($request->all(), [
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
                    'message'    => $request->message,
                ]);

                DB::commit();

                // For Mobile SMS
                $service = Service::find($request->service_id);
                $message = "$request->name asked for $service->title.Phone: $request->phone";

                Helper::send_sms('01304004000', $message, 'UNICODE');

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

                return response()->json(['alertType' => 'success', 'message' => 'আপনার মেসেজটি পাঠানো হয়েছে।']);

            } catch (Exception $e) {
                DB::rollback();
                return response()->json(['alertType' => 'error', 'message' => $e->errorInfo[2]]);
            }

        }
        return response()->json(['alertType' => 'error', 'message' => 'পূণঃবার সকল তথ্য সঠিকভাবে পূরণ করুন।']);
    }

    public function loadPhoto(Request $request)
    {
        // return $request->id;

        $data = Gallery::orderBy('id', 'desc')->where('status', 1);

        if ($request->album_id != '') {

            $data->where('album_id', '=', $request->album_id);
        }

        if ($request->is_firstime == 'yes') {

            $data->take(4);
        }
        return $data = $data->get();

        // return \View::make('ajax.ajax_photo',[
        //  'galleries' => $data
        // ]);

    }

    public function about()
    {
        return view('theme.pages.about-us');
    }

    public function services()
    {
        return view('theme.pages.service');
    }

}
