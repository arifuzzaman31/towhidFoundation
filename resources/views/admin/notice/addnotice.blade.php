@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  col-md-offset-2">
    <div class="card">
        <div class="header">
            <div class="card-body">
                <form action="{{route('notice.store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <label for="title">Title </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label for="description">Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="8" class="form-control tinymce-editor" name="description"></textarea>
                        </div>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label for="icon">Image <small>(Optional)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" id="icon" name="image" class="form-control">
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
        </div>
    </div>
</div>
@endsection
