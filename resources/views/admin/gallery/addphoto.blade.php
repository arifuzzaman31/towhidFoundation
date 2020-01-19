<div class="body">
    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="caption">Caption</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="caption" name="caption" class="form-control">
            </div>
        </div>
         <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control" required="">
            </div>
        </div>
        <label for="album">Album :</label>
        <div class="row clearfix">
            <div class="col-sm-12">
                <select class="form-control show-tick" name="album_id" id="album" required="">
                    <option>-- Please select --</option>
                    @foreach($albums as $album)
                        <option value="{{$album->id}}">{{$album->name}}</option>
                    @endforeach
                </select>
            </div>
        </div></br>
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
