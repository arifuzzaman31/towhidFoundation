@extends('admin.main')
@section('adminContent')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
			<div class="body">
				<div class="row clearfix">
				    <div class="col-md-12">
				        <p class="align-left font-24">
				            <b>{{$data->title}}</b>
				        </p>
					    <div style="margin: 20px; justify-content: center; display: flex;">
				        	<img class="img-fluid" src="{{ url('images/blog-image/'.$data->blog_image) }}" height="300">
				        </div>
				        <div class="align-left">
				            {{ strip_tags($data->description) }}
				        </div>
				    </div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection

