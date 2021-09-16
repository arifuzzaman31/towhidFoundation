@extends('admin.main')
@section('adminContent')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <div class="card-body">
				<div class="row clearfix">
				    <div class="col-md-12">
				        <p class="align-left font-24">
				            <b>{{$data->title_en}}</b> || <b>{{$data->title_bn}}</b>
				        </p>
				        <div class="align-left">
				            {{ strip_tags($data->description) }}
				        </div>
				        <div style="margin: 20px; justify-content: center; display: flex;">
				        	<img class="img-fluid" src="{{ url('images/service-image/'.$data->image) }}" height="400">
				        </div>
				    </div>
				</div>
				<p class="font-bold m-t-35">fb-link</label>
				@if($data->service_link)
					<p class="font-underline">{{$data->service_link}}</p>
				@endif

				</div>	
		</div>
    </div>
</div>
@endsection
