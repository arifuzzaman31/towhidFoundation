@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
    <div class="card">
        <div class="header">
			<div class="card-body">
			    <form action="{{route('service.update',$data->id)}}" method="post" enctype="multipart/form-data">
			       @csrf

			        <label for="title">Title <small>(English)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="titleEn" name="title_en" value="{{$data->title_en}}" class="form-control">
                        </div>
                    </div>

                    <label for="title">Title <small>(Bangla)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="titleBn" value="{{$data->title_bn}}" name="title_bn" class="form-control">
                        </div>
                    </div>
			        <label for="description">Description</label>
			        <div class="form-group">
			            <div class="form-line">
			                <textarea rows="8" class="form-control tinymce-editor" name="description">{{$data->description}}</textarea>
			            </div>
			        </div>
			        <label for="type">Type :</label>
			        <div class="row clearfix">
			            <div class="col-sm-12">
			                <select class="form-control show-tick" id="type" name="type">
			                	<option value="">-- Please select --</option>
			                	<option @if($data->type == 1) selected @endif value="1">সল্পমূল্যে</option>
	                    		<option @if($data->type == 0) selected @endif value="0">বিনামূল্যে</option>

			                </select>
			            </div>
			        </div></br>
			        <label for="icon">Service Icon :</label>
			        <div class="form-group">
			            <div class="form-line">
			            	@if($data->image)
			            	<img class="card-img-top" src="{{URL::to('images/service-image/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">@endif
			                <input type="file" id="icon" name="image" class="form-control">
			            </div>
			        </div>
			        <label for="service_link">Service FB link (Optional)</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input class="form-control" id="service_link" name="service_link" value="{{$data->service_link}}">
			            </div>
			        </div>
			        <div class="demo-switch-title">Status</div>
			            <div class="switch">
			                <label><input type="checkbox" name="status" value="1" @if($data->status == 1) checked @endif><span class="lever switch-col-green"></span></label>
			            </div>
			        <br>
			        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
			    </form>
			</div>
		</div>
    </div>
</div>
@endsection
