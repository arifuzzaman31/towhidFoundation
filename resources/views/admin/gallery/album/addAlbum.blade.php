<div class="body">
    <form action="{{route('album.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="album">Album Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="album" name="name" class="form-control" required="">
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