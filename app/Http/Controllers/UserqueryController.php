<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Userquery;
use DB;

class UserqueryController extends Controller
{
    
    public function index()
    {
        $userqueries = Userquery::all();
        return view('admin.userRequest.allEmail', compact('userqueries'));
    }


    public function changestatus($id)
    {
        $data = Userquery::where('id',$id)->first();
            if ($data->seen == 0) {
                $data->seen = 1;
            }
            else {
                $data->seen = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Conformation status changed!']);
    }

    public function show($id)
    {
       $data = Userquery::where('id',$id)->first();
        return view('admin.userRequest.showRequest',compact('data'));
    }


    public function destroy($id)
    {
        $data = Userquery::where('id',$id)->first();
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
    }
}
