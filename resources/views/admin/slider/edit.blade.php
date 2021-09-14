@extends('admin.main')
@section('adminContent')

<div class="login-box">
    <div class="card col-md-6 col-md-offset-3">
        <div class="body ">

             <div class="m-b-15"><h3>Upload Slider</h3></div>
            <form id="sign_in" action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
            	@csrf
                @method('PUT')
                <div class="input-group">
                    <p>Image (keep Every Image Same Size)</p>
                    <img src="{{ url('images/slider/'.$slider->image) }}" height="100">
                    <div class="form-line">
                        <input type="file" name="image" class="form-control" accept=".jpg,.png,.jpeg,.PNG" id="">
                    </div>
                </div>
                <div class="input-group">
                    <p>Status</p>
                    <div class="form-line">
                        <select name="status" id="" class="">
                            <option value="1" @if($slider->status == 1) selected @endif >Publish</option>
                            <option value="0" @if($slider->status == 0) selected @endif>Unpublish</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="">

                    </div>
                    <div class="col-xs-4 col-xs-offset-4 p-t-5">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
