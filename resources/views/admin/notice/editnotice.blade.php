@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
    <div class="card">
        <div class="header">
			<div class="card-body">
			    <form action="{{ url('notice',$data->id)}}" method="PUT" enctype="multipart/form-data">
			       @csrf
			       @method('put')
			        <label for="title">Title </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="title" value="{{ $data->title }}" name="title" class="form-control">
                        </div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label for="short_description">Short Description <small>(Optional)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="short_description" value="{{ $data->short_description }}" name="short_description" class="form-control">
                        </div>
                        @error('short_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <label for="description">Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="8" class="form-control tinymce-editor" name="description">{{ $data->description }}</textarea>
                        </div>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <label for="icon">Image <small>(Optional)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                        	@if($data->image)
			            	<img class="card-img-top" src="{{URL::to('images/notice/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">@endif
                            <input type="file" id="icon" name="image" class="form-control">
                        </div>
                    </div>
                   
                    <div class="demo-switch-title">Status</div>
                        <div class="switch">
                            <label><input type="checkbox" checked name="status" value="{{ $data->status }}"><span class="lever switch-col-green"></span></label>
                        </div>
                    </br>
			        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
			    </form>
			</div>	
		</div>
    </div>
</div>
@endsection