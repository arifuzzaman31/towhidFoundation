@extends('theme.include.master')

@section('meta')
    <meta property="og:image" content="{{ url('assets/images/logo_seo.png') }}" />
    <meta property="og:title" content="Towhid Foundation |  Towhid Foundation Notice" />
    <meta property="og:description" content="Towhid Foundation | Made for Humanity" />
@endsection

@section('title','Notice')

@section('content')


<style>
    ol.list-num-count.notice-date.upper-alpha>li:before {
        content: "\f017";
        font: normal normal normal 14px/1 FontAwesome;
        position: absolute;
        top: 2px;
    }
</style>


<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image:url(assets/images/banner/4.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="mt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="m-b0">Notice</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Notice</li>
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
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> Notice</span></h2>
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
                                    @if($notices->count() > 0)
                                    @foreach($notices as $notice)
                                    <div class="masonry-item cat-2 col-lg-6  col-md-6 col-sm-6 m-b30">
                                        <div class="image-effect-one1 hover-shadow">
                                            <img src="{{ url('images/notice/'.$notice->image)}}" alt="" />
                                            <div class="figcaption">
                                                <h4>{{ $notice->title }}</h4>
                                                <p>{!! $notice->description !!}</p>
                                                <div class="">
                                                    <ol class="list-num-count notice-date upper-alpha list-outline-none m-b0">
                                                        <li><b>{{ date('d  M, Y',strtotime($notice->date)) }}</b></li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- COLUMNS 3 -->
                                    <!-- COLUMNS 4 -->
                                </div>
                                <!-- GALLERY CONTENT END -->
                                <div class="m-t50 text-center">
                                   <!-- pagination will go here  -->
                                   {{ $notices->links() }}
                                </div>
                            </div>
                            <!-- GALLERY CONTENT END -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->
</div>
@endsection
