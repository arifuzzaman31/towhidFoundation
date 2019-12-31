<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('member.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="caption">Caption</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="caption" name="caption" class="form-control" value="{{$data->caption}}">
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		            	@if($data->image)
		            	<img class="card-img-top" src="{{URL::to('images/team-member-image/'.$data->image)}}" alt="our gallery" height="60px" width="80px">@endif
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" name="status" value="1" @if($data->status == 1) checked @endif><span class="lever switch-col-green"></span></label>
		            </div>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>
