@extends('admin.main')
@section('adminContent')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <!-- <button class="btn btn-primary"  ></button> -->
                <a href="{{ route('notice.create') }}" class="btn btn btn-info">Add More</a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Short-Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            	@if(count($notices) > 0)
            	<?php $i = 1;?>
            	@foreach($notices as $notice)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{!! $notice->title !!}</td>
	                    <!-- <td style="width: 40%">{{ substr($notice->description,0,80) }}....</td> -->
                        <td>
                            @if($notice->image)
                                <img src="{{URL::to('images/notice/'.$notice->image)}}" height="40px" width="50px">
                            @endif
                        </td>
	                    <td style="width: 30%">{!! $notice->short_description !!}</td>
                        <td style="width: 12%">{{ $notice->date }}</td>
	                    <td style="width: 15%">
	                    	<a href="{{ url('notice/'.$notice->id.'/edit') }}" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

                            <a href="{{ url('show-notice/'.$notice->id)}}" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-eye"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-service-status',$notice->id)}}" class="btn @if($notice->status > 0) btn-success @else btn-warning @endif btn-xs">@if($notice->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('notice-destroy',$notice->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

	                    </td>

	                </tr>
	                <?php $i++;?>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

@endsection