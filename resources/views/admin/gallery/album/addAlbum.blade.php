@extends('admin.main')
@section('adminContent')
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
    <div class="card">
        <div class="header">
            <div class="body">
                <form action="{{route('album.store')}}" method="post">
                   @csrf
                    <label for="album">Album Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="album" name="name" class="form-control">
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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
        </div>
    </div>
</div>
@endsection