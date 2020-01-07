@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-photo','Add Photo')" >Add More Photo</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Album</th>
                    <th>Caption</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
           
            <tbody>
            	@if(count($photos) > 0)
            	<?php $i = 1; ?>
            	@foreach($photos as $photo)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
                        <td style="width: 10%">{{$photo->album_name->name}}</td>
	                    <td style="width: 30%">{{$photo->caption}}</td>
                        <td>
                        @if($photo->image)
                            <img src="{{URL::to('images/team-member-image/'.$photo->image)}}" height="40px" width="60px">
                        @endif
                        </td>
	                    <td>
	                    	<a onclick="getModal('edit.photo/{{$photo->id}}','Edit Photo')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            
                            <a onclick="getModal('show-photo/{{$photo->id}}','Show Photo')" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-photo-status',$photo->id)}}" class="btn @if($photo->status > 0) btn-success @else btn-warning @endif btn-xs">@if($photo->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('photo-delete',$photo->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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