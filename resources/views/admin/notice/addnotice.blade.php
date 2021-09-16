@extends('admin.main')
@section('adminContent')
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12  col-md-offset-2">
    <div class="card">
        <div class="header">
            <div class="card-body">
                <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <label for="title">Title <small>(English)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="titleEn" name="title_en" class="form-control">
                        </div>
                        @error('title_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <label for="title">Title <small>(Bangla)</small></label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="titleBn" name="title_bn" class="form-control">
                        </div>
                        @error('title_bn')
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
                    <label for="type">Type :</label>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <select class="form-control show-tick" name="type" id="type">
                                <option value="">-- Please select --</option>
                                <option value="সল্পমূল্যে">সল্পমূল্যে</option>
                                <option value="বিনামূল্যে">বিনামূল্যে</option>
                            </select>
                        </div>
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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
        </div>
    </div>
</div>
@endsection