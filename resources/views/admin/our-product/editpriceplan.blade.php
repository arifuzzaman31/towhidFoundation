<div class="card">
  <img class="card-img-top" src="{{URL::to('images/product-image/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('priceplan.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		       <label for="title">Title</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
		            </div>
		        </div>
		      
		        <label for="description">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea id="tinymce" name="description">{{$data->description}}</textarea>
		            </div>
		        </div>
		        <label for="price">Price</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="price" name="price" value="{{$data->price}}" class="form-control">
		            </div>
		        </div>
		        <label for="product_link">Product Link</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="product_link" name="product_link" class="form-control" value="{{$data->product_link}}">
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <input type="checkbox" id="remember_me" name="status" value="1" class="filled-in">
		        <label for="remember_me">Status</label>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>