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
                        <h2 class="m-b0">Our Members</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Our Members</li>
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
                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">উপদেষ্টা </span>পরিষদ</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- IMAGE Team START -->
                <div class="section-content">
                    <div class="row">
                        @foreach($advisor as $value)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                            <div class="our-team-1 hover-animation-1">
                                <div class="profile-image "><img src="{{asset('images/team-member-image/'.$value->image)}}" alt="{{ $value->name }}" /></div>
                                <div class="figcaption">
                                    <h4 class="m-b5">{{ $value->name }} </h4>
                                    <h5 class="m-t0">{{ $value->designation }}</h5>
                                </div>
                            </div>
                        </div>
                        <!-- members 1  -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->


    <!-- OUR SPECIALLIZATION START -->
    <div class="section-full p-b30 bg-dark" style="background-image:url(assets/images/background/bg-6.png);">
        <div class="container">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">
                <div class="section-head m-t80">
                    <div class="mt-separator-outer  text-center">
                        <div class="mt-separator">
                            <h2 class="text-uppercase sep-line-one text-white "><span class="font-weight-300 text-primary">কার্যনির্বাহী </span>পরিষদ</h2>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->
                <!-- IMAGE Team START -->
                <div class="section-content">
                    <div class="row">

                      @foreach($executive_members as $value)
                        <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                            <div class="our-team-1 hover-animation-1">
                                <div class="profile-image "><img src="{{asset('images/team-member-image/'.$value->image)}}"
                                alt="{{ $value->name }}" /></div>
                                <div class="figcaption">
                                    <h4 class="m-b5">{{ $value->name }} </h4>
                                    <h5 class="m-t0">{{ $value->designation }}</h5>
                                </div>
                            </div>
                        </div>
                        <!-- members 1  -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->

</div>
@endsection
