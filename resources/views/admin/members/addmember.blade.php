<div class="body">
    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="title">Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="name" name="name" class="form-control" required="">
            </div>
        </div>
        <label for="designation">Designation</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="designation" name="designation" class="form-control" required="">
            </div>
        </div>
        <label for="tinymce">Quote</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="tinymce" name="quote"></textarea>
            </div>
        </div>
        <label for="title">Facebook Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="fb_link" name="fb_link" class="form-control">
            </div>
        </div>
        <label for="description">Twiter Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="tw_link" name="tw_link" class="form-control">
            </div>
        </div>
        <label for="inst_link">Instagram Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="inst_link" name="inst_link" class="form-control">
            </div>
        </div>
         <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control">
            </div>
        </div>
        <div class="demo-switch-title">Status</div>
            <div class="switch">
                <label><input type="checkbox" name="status" checked value="1"><span class="lever switch-col-green"></span></label>
            </div>
        <br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>