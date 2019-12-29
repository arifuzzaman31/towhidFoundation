<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Team;
use App\Blog;
use App\Priceplan;

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

    public function ServiceForm()
    {
        return "hi";
    }

}
