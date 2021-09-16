<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Blog;
use DB;
use Helper;

class BlogController extends Controller
{
    public function index()
    {
       $blogs = Blog::all();
        return view('admin.blogs.allblog', compact('blogs'));
    }

    public function changeStatus($id)
    {
         $data = Blog::where('id',$id)->first();
         $msg = '';
            if ($data->status == 0) {
                $data->status = 1;
                $msg .= 'Activated';
            }
            else {
                $data->status = 0;
                $msg .= 'Deactivited';
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Blog status '.$msg]);
    }

    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        
        $request->validate([
            'title'       => 'required',
            'description' => 'required'
        ]);
            try {
                DB::beginTransaction();
                $insertid = Blog::insertGetId([
                    'title'      =>  $request->title,
                    'slug'       =>  Helper::make_slug($request->title),
                    'description'=>  $request->description,
                    'status'     =>  $status
                ]);

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/blog-image',$imageName);

                    Blog::where('id', $insertid)
                            ->update([
                                'blog_image' => $imageName
                            ]);
                }
                    DB::commit();
                return redirect()->route('blog')->with(['alert-type' => 'success','message' => 'Blog Added successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
               return back()->with(['alert-type' => 'error','message' => 'Database error occured!']);
            }
    }

    public function show($id)
    {
        $data = Blog::where('id',$id)->first();
        return view('admin.blogs.showblog',compact('data'));
    }

    public function edit($id)
    {
        $data = Blog::where('id',$id)->first();
        return view('admin.blogs.editblog',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status = $request->status ? 1 : 0;
        $request->validate([
            'title'       => 'required',
            'description' => 'required'
        ]);
    
           try {
                DB::beginTransaction();
                $updated = Blog::find($id);
                    $updated->update([
                        'title'      =>  $request->title,
                        'slug'       => Helper::make_slug($request->title),
                        'description'=>  $request->description,
                        'status'     =>  $status,
                    ]);

                if ($request->hasFile('image')) {

                if(!empty($updated->blog_image) && file_exists('images/blog-image/'.$updated->blog_image)){      
                    unlink('images/blog-image/'.$updated->blog_image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/blog-image',$imageName);

                    Blog::where('id', $updated->id)
                            ->update([
                                'blog_image' => $imageName
                            ]);
                }
                    DB::commit();
                return redirect()->route('blog')->with(['alert-type' => 'success','message' => 'Blog updated successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::where('id',$id)->first();
            if(!empty($data->blog_image) && file_exists('images/blog-image/'.$data->blog_image)){      
                unlink('images/blog-image/'.$data->blog_image);
            }
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Blog Data Deleted']);
    }

    public function getblog()
    {
        return view('admin.blogs.addblog');
    }
}
