@extends('admin.main')
@section('adminContent')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <div class="card-body">
				<div class="row clearfix">
				    <div class="col-md-12">
				        <p class="align-left font-24">
				            <b>{{$data->title}}</b>
				        </p>
				        <div style="margin: 20px; justify-content: center; display: flex;">
				        	<img class="img-fluid" src="{{ url('images/notice/'.$data->image) }}" height="400">
				        </div>
				        <div class="align-left">
				            {{ strip_tags($data->description) }}
				        </div>
				    </div>
				</div>
				<p class="font-bold m-t-35">Published</label>
					<p class="font-underline">{{$data->date}}</p>
				</div>	
		</div>
    </div>
</div>
@endsection
