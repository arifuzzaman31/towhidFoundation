@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-to-create','Make Album')" >Make an Album</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Caption</th>
                    <th>Action</th>
                </tr>
            </thead>
           
            <tbody>
            	@if(count($albums) > 0)
            	<?php $i = 1; ?>
            	@foreach($albums as $album)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 50%">{{$album->name}}</td>
	                    <td>
	                    	<a onclick="getModal('edit.album/{{$album->id}}','Edit Album')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

	                    	<a type="button" title="Status" href=" {{route('change-album-status',$album->id)}}" class="btn @if($album->status > 0) btn-success @else btn-warning @endif btn-xs">@if($album->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('album-delete',$album->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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