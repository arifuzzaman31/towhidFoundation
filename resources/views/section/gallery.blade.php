<section class="team-membar position-relative pt-30 pb-80 theme-bg" id="gallery" style="background: #f2f9ff;">
 <div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3 text-center">
            <div class="section-title mb-45">
                <h4 class="text-uppercase mb-20"></h4>
                <h1> @lang('gallery.our') <br> @lang('gallery.gallery') </h1>
            </div>
        </div>
    </div>
 <gallery :albums="{{ $albums }}"></gallery>
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


