<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('album.update',$data->id)}}" method="post" enctype="multipart/form-data">
		        @csrf
		        <label for="updatealbum">Album Name</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="updatealbum" name="name" class="form-control" value="{{$data->name}}">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" name="status" value="1"  @if($data->status == 1) checked @endif><span class="lever switch-col-green"></span></label>
		            </div>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>
