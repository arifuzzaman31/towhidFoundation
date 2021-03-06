<div class="body">
    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="title">Title</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="title" name="title" class="form-control">
            </div>
        </div>
        <label for="description">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="tinymce" name="description"></textarea>
            </div>
        </div>
        <label for="type">Type :</label>
        <div class="row clearfix">
            <div class="col-sm-12">
                <select class="form-control show-tick" name="type" id="type">
                    <option value="">-- Please select --</option>
                    <option value="সল্পমূল্যে">সল্পমূল্যে</option>
                    <option value="বিনামূল্যে">বিনামূল্যে</option>
                </select>
            </div>
        </div></br>
        <label for="icon">Service Icon :</label>
        <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control">
            </div>
        </div>
        <label for="service_link">Service FB link (Optional)</label>
        <div class="form-group">
            <div class="form-line">
                <input class="form-control" id="service_link" name="service_link">
            </div>
        </div>
        <div class="demo-switch-title">Status</div>
            <div class="switch">
                <label><input type="checkbox" checked name="status" value="1"><span class="lever switch-col-green"></span></label>
            </div>
        </br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>