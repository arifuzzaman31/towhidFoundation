<div class="body">
    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="title">Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" required id="name" name="name" class="form-control">
            </div>
        </div>
        <label for="designation">Designation</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" required id="designation" name="designation" class="form-control">
            </div>
        </div>
        <!-- <label for="tinymce">Quote</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="tinymce" name="quote"></textarea>
            </div>
        </div> -->
        <label for="title">Facebook Link (optional)</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="fb_link" name="fb_link" class="form-control">
            </div>
        </div>
        <label for="description">Twiter Link (optional)</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="tw_link" name="tw_link" class="form-control">
            </div>
        </div>
        <label for="inst_link">Instagram Link (optional)</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="inst_link" name="inst_link" class="form-control">
            </div>
        </div>
        <label for="inst_link">Image </label>
         <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" required name="image" class="form-control">
            </div>
        </div>
        <label for="inst_link">Member Type</label>
         <div class="form-group">
            <div class="form-line">
               <select name="member_type" id="">
                   <option value="1">Executive Member</option>
                   <option value="0">Advisor</option>
               </select>
            </div>
        </div>
        <div class="demo-switch-title">Status</div>
            <div class="switch">
                <label><input type="checkbox" name="status" checked value="1"><span class="lever switch-col-green"></span></label>
            </div>
        <br>
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
