@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
    <div class="card">
        <div class="header">
        <h4 class="text-center">Edit Member</h4>
            <div class="body">
			    <form action="{{route('update-member',$data->id)}}" method="post" enctype="multipart/form-data">
			       @csrf
			        <label for="title">Name</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}">
			            </div>
			            @error('name')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
			        </div>
			        <label for="description">Designation</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input type="text" id="designation" name="designation" class="form-control" value="{{$data->designation}}">
			            </div>
			            @error('designation')
	                        <div class="text-danger">{{ $message }}</div>
	                    @enderror
			        </div>
			   
			        <label for="title">Facebook Link (optional)</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input type="text" id="fb_link" name="fb_link" class="form-control" value="{{$data->fb_link}}">
			            </div>
			        </div>
			        <label for="description">Twiter Link (optional)</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input type="text" id="tw_link" name="tw_link" class="form-control" value="{{$data->tw_link}}">
			            </div>
			        </div>
			        <label for="inst_link">Instagram Link (optional)</label>
			        <div class="form-group">
			            <div class="form-line">
			                <input type="text" id="inst_link" name="inst_link" class="form-control" value="{{$data->inst_link}}">
			            </div>
			        </div>
			         <div class="form-group">
			            <div class="form-line">
			            	@if($data->image)
	                            <img src="{{URL::to('images/team-member-image/'.$data->image)}}" height="50px" width="70px">
	                        @endif
			                <input type="file" id="icon" name="image" class="form-control">
			            </div>
			        </div>

					<label for="inst_link">Member Type</label>
	         <div class="form-group">
	            <div class="form-line">
	               <select class="form-control" name="member_type" id="">
	                   <option @if($data->member_type==1) selected @endif value="1">Executive Member</option>
	                   <option @if($data->member_type==0) selected @endif value="0">Advisor</option>
	               </select>
	            </div>
	        </div>
			       <div class="demo-switch-title">Status</div>
			            <div class="switch">
			                <label><input type="checkbox" @if($data->status === 1)checked @endif name="status" value="1"><span class="lever switch-col-green"></span></label>
			            </div>
			        <br>
			        <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			            <button type="submit" class="btn btn-primary">Update</button>
			        </div>
			    </form>
			</div>

		</div>
	</div>
</div>

@endsection