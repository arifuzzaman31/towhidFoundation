@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary">User Request</button>
            </div>
                <div class="body">
                            <div class="table-responsive">
                                <table id="table-data" class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                        	@if(count($userqueries) > 0)
                        	<?php $i = 1; ?>
                        	@foreach($userqueries as $userquery)
            	                <tr>
            	                    <td style="width: 5%">{{ $i++ }}</td>
            	                    <td style="width: 15%">{{$userquery->service_name->title}}</td>
                                    <td style="width: 10%">{{$userquery->name}}</td>
                                    <td style="width: 10%">{{$userquery->phone}}</td>
            	                    <td style="width: 45%">{!! substr($userquery->message,0,70) !!}...</td>
                                    <td style="width: 10%">
            	                    
                                        <a onclick="getModal('show-request/{{$userquery->id}}','Show Message')" title="Show" type="button" class="btn btn-warning btn-xs"><i class="fa fa-book"></i></a>

            	                    	<a type="button" title="Confirm" href=" {{route('change-request-confirm',$userquery->id)}}" class="btn @if($userquery->seen > 0) btn-success @else btn-warning @endif btn-xs">@if($userquery->seen > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

            		                  <a type="button" title="Delete" href="{{route('request-delete',$userquery->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

            	                    </td>
            	                    
            	                </tr>
            	                <?php //$i++; ?>
                            @endforeach
                          @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    {{ $userqueries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
