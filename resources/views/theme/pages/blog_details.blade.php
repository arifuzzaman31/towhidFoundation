@extends('theme.include.master')


@section('content')

<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
     style="background-image: url({{URL:: to('images/blog-image/'.$blog->blog_image)}});">
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
                        <li>{{ $blog->title }}</li>
                    </ul>
                </div>
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- CONTENT START -->
    <div class="page-content ">
        <!-- SECTION CONTENT START -->
        <div class="section-full p-tb80 inner-page-padding">
            <div class="container">

                <div class="blog-post date-style-3 blog-detail text-black">

                    <div class="mt-post-title ">
                        <h2 class="post-title"><a href="javascript:void(0);" class="font-weight-600">{{ $blog->title }}</a></h2>
                    </div>
                    <div class="mt-post-meta ">
                        <ul>
                            <li class="post-date"><strong class="text-primary">{{ date('d', strtotime($blog->created_at)) }}</strong> <span>{{ date('M Y', strtotime($blog->created_at)) }}</span> </li>
                            <li class="post-author"><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                        </ul>
                    </div>
                    <div class="mt-post-media clearfix m-b30 ">
                       <img class="img-responsive text-center m-auto" src="{{ url('images/blog-image/'.$blog->blog_image) }}" alt="">
                    </div>


                    <div class="mt-post-text">
                     {!! $blog->description !!}
                    </div>

                    <div class="autor-post-tag-share bdr-t-1 bdr-solid bdr-gray p-t20">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="mt-box">

                                    <div class="clearfix">
                                        <h4>Share this Post:</h4>
                                        <div class="widget_social_inks">
                                            <ul class="social-icons social-md social-square social-dark m-b0">
                                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{  Request::url() }}" class="fa fa-facebook"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OUR BLOG START -->

                <!-- TITLE START -->
                <div class="section-head ">
                    <div class="mt-separator-outer separator-left">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Latest</span> Media & News</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content">
                    <div class="row">
                    <div class="portfolio-wrap mfp-gallery news-masonry clearfix row">
                            @foreach($recent_blog as $value)
                            <!-- COLUMNS 1 -->
                            <div class="masonry-item col-md-6 col-sm-6">
                                <div class="blog-post blog-grid date-style-1">
                                    <div class="mt-post-media mt-img-effect zoom-slow">
                                        <a href="{{ route('blog.details',['id' => $value->id,'slug'=>$value->slug]) }}">
                                            <img src="{{ url('images/blog-image/'.$value->blog_image) }}" alt=""></a>
                                    </div>
                                    <div class="p-tb20 bg-white">
                                        <div class="mt-post-info">
                                            <div class="mt-post-meta ">
                                                <ul>
                                                    <li class="post-date"><strong class="text-primary">{{ date('d', strtotime($value->created_at)) }}</strong> <span>{{ date('M Y', strtotime($value->created_at)) }}</span></li>
                                                </ul>
                                            </div>
                                            <div class="mt-post-title ">
                                                <h4 class="post-title"><a href="{{ route('blog.details',['id' => $value->id,'slug'=>$value->slug]) }}" class=" font-weight-600 m-t0">{{ $value->title }}</a></h4>
                                            </div>
                                            <div class="mt-post-text">
                                                <!-- <p>Our goal then and now is to provide quality on time projects. we let our quality work and commitment to customer satisfaction be our slogan.</p> -->
                                            </div>
                                            <a href="{{ route('blog.details',['id' => $value->id,'slug'=>$value->slug]) }}" class="site-button btn-effect ">ডিটেলস </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            @endforeach
                    </div>
                </div>
                <!-- OUR BLOG END -->
            </div>
        </div>
        <!-- SECTION CONTENT END -->
    </div>
    <!-- CONTENT END -->
</div>


@endsection
