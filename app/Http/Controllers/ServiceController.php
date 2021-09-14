<?php

namespace App\Http\Controllers;

use App\Service;
use DB;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $Services = Service::orderBy('type')->get();
        return view('admin.services.allservices', compact('Services'));
    }

    public function changestatus($id)
    {
        $data = Service::where('id', $id)->first();
        if ($data->status == 0) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
        cache()->forget('free-service');
        cache()->forget('paid-service');
        return back()->with(['alert-type' => 'info', 'message' => 'Service status changed!']);
    }

    public function store(Request $request)
    {
        $status     = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
            'type'        => 'required',
            'image'       => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                if ($request->hasFile('image')) {
                    $image     = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('images/service-image', $imageName);
                    Service::insert([
                        'title'        => $request->title,
                        'slug'         => Helper::make_slug($request->title),
                        'description'  => $request->description,
                        'type'         => $request->type,
                        'image'        => $imageName,
                        'service_link' => $request->service_link,
                        'status'       => $status,
                    ]);
                    DB::commit();
                    cache()->forget('free-service');
                    cache()->forget('paid-service');
                    return back()->with(['alert-type' => 'success', 'message' => 'Service Added successfull']);
                }
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
            }
        }
        return back()->with(['alert-type' => 'error', 'message' => 'Validation Error Occured!']);
    }

    public function show($id)
    {
        $data = Service::where('id', $id)->first();
        return view('admin.services.showservices', compact('data'));
    }

    public function edit($id)
    {
        $data = Service::where('id', $id)->first();
        return view('admin.services.editservices', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $status     = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
            'type'        => 'required',
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                $updated               = Service::where('id', $id)->first();
                $updated->title        = $request->title;
                $updated->slug         = Helper::make_slug($request->title);
                $updated->description  = $request->description;
                $updated->type         = $request->type;
                $updated->service_link = $request->service_link;
                $updated->status       = $status;
                $updated->update();

                if ($request->hasFile('image')) {

                    if (!empty($updated->image) && file_exists('images/service-image/' . $updated->image)) {
                        unlink('images/service-image/' . $updated->image);
                    }
                    $image     = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move('images/service-image', $imageName);

                    Service::where('id', $updated->id)
                        ->update([
                            'image' => $imageName,
                        ]);
                }
                cache()->forget('free-service');
                cache()->forget('paid-service');
                DB::commit();
                return back()->with(['alert-type' => 'success', 'message' => 'Service Updated successfull']);

            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
            }
        } else {
            return back()->with(['alert-type' => 'error', 'message' => 'Validation Error Occured!']);
        }
    }

    public function destroy($id)
    {
        $data = Service::where('id', $id)->first();
        $data->delete();
        cache()->forget('free-service');
        cache()->forget('paid-service');
        return back()->with(['alert-type' => 'warning', 'message' => 'Data Deleted']);
    }

    public function getService()
    {
        return view('admin.services.addservices');
    }
}
