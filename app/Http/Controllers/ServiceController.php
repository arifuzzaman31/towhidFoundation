<?php

namespace App\Http\Controllers;

use App\Service;
use DB;
use Helper;
use Illuminate\Http\Request;

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

        $request->validate([
            'title_bn' => 'required',
            'type'     => 'required',
            'image'    => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg',
        ]);

        try {

            DB::beginTransaction();
            $status    = $request->status ? 1 : 0;
            $image     = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/service-image', $imageName);
            $service               = new Service();
            $service->title_en     = $request->title_en ? $request->title_en : 'title';
            $service->title_bn     = $request->title_bn;
            $service->slug         = rand(10000, 100000);
            $service->description  = "hii";
            $service->type         = $request->type;
            $service->service_link = 'towhidfoundation.org';
            $service->image        = $imageName;
            $service->status       = $status;
            $service->save();
            // clear cache
            cache()->forget('free-service');
            cache()->forget('paid-service');
            DB::commit();
            return redirect()->route('service')->with(['alert-type' => 'success', 'message' => 'Service Added successfull']);

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
        }

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
        $status = $request->status ? 1 : 0;
        $request->validate([
            'title_en'    => 'required',
            'title_bn'    => 'required',
            'description' => 'required',
            'type'        => 'required',
        ]);

        try {
            DB::beginTransaction();
            $updated               = Service::where('id', $id)->first();
            $updated->title_en     = $request->title_en;
            $updated->title_bn     = $request->title_bn;
            $updated->slug         = Helper::make_slug($request->title_en);
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
            return redirect()->route('service')->with(['alert-type' => 'success', 'message' => 'Service Updated successfull']);

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
        }
    }

    public function destroy($id)
    {
        $data = Service::find($id)->first();
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
