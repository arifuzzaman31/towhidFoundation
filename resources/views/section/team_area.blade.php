<section class="team-membar position-relative pt-30 pb-80 theme-bg" id="team" style="background: #f2f9ff;">
 <div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3 text-center">
            <div class="section-title mb-45">
                <h4 class="text-uppercase mb-20"></h4>
                <h1> আমাদের <br> গ্যালারি </h1>
            </div>
        </div>
    </div>
<div class="container">
            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                @if(count($albums) > 0)
                    @foreach($albums as $album)
                        <button class="btn btn-default filter-button" data-id="{{$album->id}}" data-filter="{{$album->name}}">{{$album->name}}</button>
                    @endforeach
                @endif
            </div>
            <br>
    <div class="row">
            @if(count($galleries) > 0)
            
                @foreach($galleries as $gallery)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                <a class="thumbnail" href="#" data-image-id="{{$gallery->id}}" data-toggle="modal" data-title="@if($gallery->caption){{$gallery->caption}} @else This is Nice Picture @endif"
                   data-image="{{asset('images/team-member-image/'.$gallery->image)}}"
                   data-target="#image-gallery">
                   <p class="text-center">@if($gallery->caption){{$gallery->caption}} @else This is Nice Picture @endif</p>
                    <img class="img-thumbnail"
                         src="{{asset('images/team-member-image/'.$gallery->image)}}"
                         alt="Another alt text">
                </a>
            </div>
                @endforeach
            @endif
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>
                        <h4 class="modal-title text-center" id="image-gallery-title"></h4>
                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</section>

@push('style')
 <style>
    .btn:focus, .btn:active, button:focus, button:active {
      outline: none !important;
      box-shadow: none !important;
    }

    #image-gallery .modal-footer{
      display: block;
    }

    .thumb{
      margin-top: 15px;
      margin-bottom: 15px;
    }

    .img-thumbnail:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
</style>
@endpush 