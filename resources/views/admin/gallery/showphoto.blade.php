@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
    <div class="card">
        <div class="header">
            <div class="body">
				<img id="image-gallery-image" class="img-responsive col-md-12" src="{{URL::to('images/our-gallery/'.$data->image)}}">
				    <h4 class="modal-title text-center" id="image-gallery-title">{{ $data->caption  }}</h4>
			</div>
		</div>
    </div>
</div>
@endsection

