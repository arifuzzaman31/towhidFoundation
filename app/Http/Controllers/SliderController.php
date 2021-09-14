<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::orderBy('id', 'desc')->get();

        return view('admin.slider.slider', ['slider' => $slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,PNG',
        ]);

        $slider         = new Slider;
        $slider->title  = $request->title;
        $slider->status = $request->status;

        $file = $request->file('image');

        if ($file) {
            $fileName = 'slider_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('images/slider', $fileName);
            $slider->image = $fileName;

        }
        $slider->save();

        cache()->forget('slider');

        return redirect()->route('slider.index')->with(['alert-type' => 'success', 'message' => 'Photo Added successfull']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
        $request->validate([
            'image' => 'nullable|mimes:jpeg,jpg,png,PNG',
        ]);

        $slider->title  = $request->title;
        $slider->status = $request->status;

        $file = $request->file('image');

        if ($file) {
            if (file_exists('images/slider/' . $slider->image) && !empty($slider->image)) {

                unlink('images/slider/' . $slider->image);
            }

            $fileName = 'slider_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move('images/slider', $fileName);
            $slider->image = $fileName;

        }
        $slider->update();
        cache()->forget('slider');

        return redirect()->route('slider.index')->with(['alert-type' => 'success', 'message' => 'Slider Update successfull']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (file_exists('images/slider/' . $slider->image) && !empty($slider->image)) {

            unlink('images/slider/' . $slider->image);
        }

        $slider->delete();

        cache()->forget('slider');

        return back()->with(['alert-type' => 'success', 'message' => 'Slider Updated']);

    }
}
