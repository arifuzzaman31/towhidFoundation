@extends('theme.include.master')

@section('content')
<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/banner/4.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="mt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="m-b0">Photo Albam</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Photo Albam</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR SPECIALLIZATION START -->
    <div class="section-full p-t80 p-b30 " style="background-image:url(assets/images/background/bg-5.png);">
        <div class="container">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">

                <!-- TITLE START -->
                <div class="section-head ">
                    <div class="mt-separator-outer  text-center">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> অল ফটো  </span>albam</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- SECTION CONTENTG START -->
                <div class="section-full  inner-page-padding">

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- SECTION CONTENT START -->
                                <div class="section-full inner-page-padding">
                                        <!-- GALLERY CONTENT START -->
                                        <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                                          @foreach($albums as $value)
                                              @if($value->latestImage)
                                              <div class="masonry-item cat-2 col-lg-6  col-md-6 col-sm-6 m-b30">
                                                  <div class="image-effect-one1 hover-shadow">
                                                      <img src="{{ url('images/our-gallery/'.$value->latestImage->image) }}" alt="{{ $value->name }}" />
                                                      <div class="figcaption">
                                                          <h4>{{ $value->name }}</h4>
                                                          <!-- <p>Engineering your dreams with us.</p> -->
                                                          <div class="appint-btn">
                                                              <a href="{{ route('album.details',['id'=>$value->id,'slug'=>str_replace([' ', '/'],'-',$value->name)]) }}" class="site-button m-t10 "> সকল ছবি  </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              @endif
                                              @endforeach
                                        </div>
                                        <!-- GALLERY CONTENT END -->
                                        <div class="m-t50 text-center">
                                        {!! $albums->links() !!}
                                        </div>
                                    </div>
                                    <!-- GALLERY CONTENT END -->

                                </div>
                                <!-- SECTION CONTENT END  -->
                            </div>
                        </div>

            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->
</div>

@endsection
