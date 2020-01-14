@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-service','Add Services')" >Add More Service</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
        
            <tbody>
            	@if(count($Services) > 0)
            	<?php $i = 1; ?>
            	@foreach($Services as $service)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{!! $service->title_en !!}</td>
                        <td style="width: 20%">{!! $service->title_bn !!}</td>
	                    <td style="width: 24%">{{ substr($service->description,0,40) }}...</td>
                        <td>
                        @if($service->image)
                            <img src="{{URL::to('images/service-image/'.$service->image)}}" height="40px" width="50px">
                        @endif
                        </td>
                        <td style="width: 8%">{{$service->type}}</td>
	                    <td style="width: 15%">
	                    	<a onclick="getModal('edit.service/{{$service->id}}','Edit Service')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            
                            <a onclick="getModal('show-service/{{$service->id}}','Show Service')" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-service-status',$service->id)}}" class="btn @if($service->status > 0) btn-success @else btn-warning @endif btn-xs">@if($service->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('service-delete',$service->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

	                    </td>
	                    
	                </tr>
	                <?php $i++; ?>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
</div>

@endsection