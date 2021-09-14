
@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <a href="{{ route('slider.create') }}" class="btn btn-primary"  >Add Slider</a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php $i = 1;?>
                @foreach($slider as $value)

                <tr>
                  <td>{{ $i }}</td>
                  <td><img src="{{ url('images/slider/'.$value->image) }}" height="150" alt=""></td>
                  <td>
                      {{ $value->status == 1 ? "published" : 'Unpublished' }}
                  </td>
                  <td>
                      <a href="{{ route('slider.edit',$value->id) }}" class="btn btn-primary">Edit</a>
                      <a onclick="return  confirm('are you sure ?')" href="{{ route('slider.delete',$value->id) }}" class="btn btn-primary">Delete</a>
                  </td>
                </tr>
                <?php $i++
?>
                @endforeach
            </tbody>

            <tbody>

            </tbody>
        </table>
    </div>
</div>

@endsection
