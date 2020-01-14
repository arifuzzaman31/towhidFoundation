<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('service.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="title_en">Title in Bangla</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title_en" name="title_en" value="{{$data->title_en}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="title_bn">Title in Bangla</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title_bn" name="title_bn" value="{{$data->title_bn}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="description">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea id="tinymce" name="description">{{$data->description}}</textarea>
		            </div>
		        </div>
		        <label for="type">Type :</label>
		        <div class="row clearfix">
		            <div class="col-sm-12">
		                <select class="form-control show-tick" id="type" name="type" required="">
		                	<option>-- Please select --</option>
		                	<option @if($data->type == 'বিনামূল্যে') selected @endif value="সল্পমূল্যে">সল্পমূল্যে</option>
                    		<option @if($data->type == 'বিনামূল্যে') selected @endif value="বিনামূল্যে">বিনামূল্যে</option>
             
		                </select>
		            </div>
		        </div></br>
		        <label for="icon">Service Icon :</label>
		        <div class="form-group">
		            <div class="form-line">
		            	@if($data->image)
		            	<img class="card-img-top" src="{{URL::to('images/service-image/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">@endif
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <label for="service_link">Service FB link (Optional)</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input class="form-control" id="service_link" name="service_link" value="{{$data->service_link}}">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" name="status" value="1" @if($data->status == 1) checked @endif><span class="lever switch-col-green"></span></label>
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
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>