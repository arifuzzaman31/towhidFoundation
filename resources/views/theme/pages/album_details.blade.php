@extends('theme.include.master')

@section('meta')
    <meta property="og:image" content="{{ url('assets/images/logo_seo.png') }}" />
    <meta property="og:title" content="Towhid Foundation | {{ $album->name }}" />
    <meta property="og:description" content="Towhid Foundation | {{ $album->name }}" />
@endsection

@section('title')
{{ $album->name }}
@endsection



@section('content')


<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"
    data-stellar-background-ratio="0.5" style="c">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="mt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="m-b0">Photo Gallery</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>{{ $album->name }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR SPECIALLIZATION START -->
    <div class="section-full p-t80 p-b30 " style="background-image: url({{URL:: to('assets/images/background/bg-5.png')}});">
        <div class="container">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">

                <!-- TITLE START -->
                <div class="section-head ">
                    <div class="mt-separator-outer  text-center">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> {{ $album->name }}</span></h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- SECTION CONTENTG START -->
                <div class="section-full inner-page-padding">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <!-- SECTION CONTENT START -->
                            <div class="section-full inner-page-padding">
                                <!-- GALLERY CONTENT START -->
                                <div class="portfolio-wrap mfp-gallery work-grid row clearfix">
                                   @foreach($gallery as $value)
                                    <div class="masonry-item cat-2 col-lg-6  col-md-6 col-sm-6 m-b30">
                                        <div class="image-effect-one image-effect-one1 hover-shadow">
                                            <img src="{{ url('images/our-gallery/'.$value->image) }}" alt="{{ $value->caption }}" />
                                            <div class="figcaption">
                                                <h4>{{ $value->caption }}</h4>
                                                <!-- <p>Engineering your dreams with us.</p> -->
                                                <a href="#"><i class="link-plus bg-primary"></i></a>
                                            </div>
                                            <a class="mfp-link" href="{{ url('images/our-gallery/'.$value->image) }}">
                                                <i class="fa fa-arrows-alt blue-color"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <!-- GALLERY CONTENT END -->
                                <div class="m-t50 text-center">
                                    <!-- <a href="#" class="site-button btn-effect">Load More</a> -->
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
