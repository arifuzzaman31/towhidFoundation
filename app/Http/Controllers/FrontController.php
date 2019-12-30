<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Team;
use App\Blog;
use App\Priceplan;
use App\Userquery;

class FrontController extends Controller
{
    public function index()
    {
    	$team_members =  Team::where('status',1)->get();
    	$portfolios	  =  Portfolio::where('status',1)->get();
    	$features 	  =  Feature::where('status',1)->get();
    	$blogs 		  =  Blog::where('status',1)->take(2)->latest()->get();
        $paidServices   =  Service::where(['status'=>1,'type'=>'সল্পমূল্যে'])->get();
        $freeServices   =  Service::where(['status'=>1,'type'=>'বিনামূল্যে'])->get();
        $priceplans   =  Priceplan::where('status',1)->get();
    	return view('setup.setup',compact('team_members','portfolios','features','blogs','paidServices','freeServices','priceplans'));
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

    public function getAllBlog()
    {
        $allblogs =  Blog::where('status',1)->Paginate(5);
        return view('pages.allblog', compact('allblogs'));
    }

    public function SaveForm(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'service_id' => 'required',
            'name'       => 'required',
            'phone'      => 'required|numeric',
            'address'    => 'required',
            'message'    => 'required|max:600'
        ]);
        if (!$validation->fails()) {
            try {
                 $store = Userquery::insert([
                'service_id' => $request->id,
                'name'       => $request->name,
                'phone'      => $request->phone,
                'address'    => $request->address,
                'message'    => $request->message
            ]);

                if ($store) {
                    return response()->json(['alert-type' => 'success','message' => 'আপনার মেসেজটি পাঠানো হয়েছে।']);
                }
                else{
                    return response()->json(['alert-type' => 'error','message' => 'দুঃখিত! আবার চেষ্টা করুন।']);
                    }
            }catch (Exception $e) {
                 return response()->json(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
                
        }
        else{
            return response()->json(['alert-type' => 'error','message' => 'validation error occured']);
        }
    }      

}
