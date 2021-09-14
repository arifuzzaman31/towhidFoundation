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
                        <h2 class="m-b0">Media & News</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Media & News</li>
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
            <!-- IMAGE Team START -->
            <div class="section-content">
                <!-- TITLE START -->
                <div class="section-head ">
                    <div class="mt-separator-outer  text-center">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary"> Media & </span>News</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <div class="section-full inner-page-padding">
                    <!-- GALLERY CONTENT START -->
                    <div class="clearfix">
                        <div class="portfolio-wrap mfp-gallery news-masonry clearfix row">
                            @foreach($blog as $value)
                            <!-- COLUMNS 1 -->
                            <div class="masonry-item col-md-6 col-sm-6">
                                <div class="blog-post blog-grid date-style-1">
                                    <div class="mt-post-media mt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ url('images/blog-image/'.$value->blog_image) }}" alt=""></a>
                                    </div>
                                    <div class="p-tb20 bg-white">
                                        <div class="mt-post-info">
                                            <div class="mt-post-meta ">
                                                <ul>
                                                    <li class="post-date"><strong class="text-primary">{{ date('d', strtotime($value->created_at)) }}</strong> <span>{{ date('M Y', strtotime($value->created_at)) }}</span></li>
                                                </ul>
                                            </div>
                                            <div class="mt-post-title ">
                                                <h4 class="post-title"><a href="javascript:void(0);" class=" font-weight-600 m-t0">{{ $value->title }}</a></h4>
                                            </div>
                                            <div class="mt-post-text">
                                                <!-- <p>Our goal then and now is to provide quality on time projects. we let our quality work and commitment to customer satisfaction be our slogan.</p> -->
                                            </div>
                                            <a href="media-news-details.php" class="site-button btn-effect ">ডিটেলস </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            @endforeach

                        </div>
                        <ul class="pagination m-tb0">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    <!-- GALLERY CONTENT END -->

                </div>
                <!-- SECTION CONTENT END  -->

            </div>


        </div>
    </div>
</div>
<!-- OUR SPECIALLIZATION END -->
</div>
@endsection
