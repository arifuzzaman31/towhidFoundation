@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary">Admin</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            	@if($users)
            	<?php $i = 1; ?>
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{{$users->name}}</td>
	                    <td>{{$users->email}}</td>
                       
	                    <td>
	                    	<a onclick="getModal('change-password-user/{{$users->id}}','Edit user')" title="Change Password" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

		                  <a type="button" title="Delete" href="{{route('user-delete',$users->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
	                    </td>    
	                </tr>
	                <?php $i++; ?>
              @endif
            </tbody>
        </table>
    </div>
</div>

@endsection