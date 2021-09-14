@extends('theme.include.master')


@section('content')



<style>
    .members-about:after {
        content: "";
        position: absolute;
        width: 75%;
        height: 92%;
        left: 0px;
        top: 18%;
        z-index: -1;
    }

    .image-effect-one1:hover img {
        -webkit-transform: translateY(-0px) !important;
        transform: translateY(-0px) !important;
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
                        <h2 class="m-b0">About Us</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR SPECIALLIZATION START -->
    <div class="section-full  p-b30 " style="background-image:url(assets/images/background/bg-5.png);">
        <div class="container">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">

                <!-- ABOUT COMPANY SECTION START -->
                <div class="section-full p-tb80  inner-page-padding">
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <div class="m-about ">
                                    <div class="owl-carousel about-us-carousel">
                                        <!-- COLUMNS 1 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="assets/images/about-logo.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="item">
                                            <div class="ow-img">
                                                <a href="javascript:void(0);"><img src="assets/images/about-logo.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6">
                                <div class="m-about-containt text-black p-t80">
                                    <div class="m-about-years bg-moving" style="background-image:url(assets/images/background/line.png);">
                                        <span class="text-primary large-title">২০১৮</span>
                                        <span class="large-title-info"> সালে স্থাপিত</span>
                                    </div>
                                    <h3 class="font-weight-600">তৌহিদ ফাউন্ডেশন</h3>
                                    <p>অন্যকে সহায়তা করা কেবল তাদের পক্ষে ভালো এবং একটি ভালো জিনিসই নয়, এটি আমাদের আরও সুখী এবং স্বাস্থ্যকরও করে। প্রদানও আমাদের অন্যের সাথে সংযুক্ত করে, আরও শক্তিশালী সম্প্রদায় তৈরি করে এবং সবার জন্য একটি সুখী সমাজ গঠনে সহায়তা করে। এবং এটি অর্থের বিষয়ে নয় - আমরা আমাদের সময়, ধারণা এবং শক্তিও দিতে পারি। সুতরাং আপনি যদি ভাল বোধ করতে চান , ভালো করুন।</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ABOUT COMPANY SECTION END -->
            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->

    <!-- OUR SPECIALLIZATION START -->
    <div class="section-full p-t80 p-b30 bg-dark" style="background-image:url(assets/images/background/bg-6.png);">
        <div class="container">
            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">
                <div class="section-head m-b50 text-white text-center">
                    <h3 class="m-t0">আমাদের সেবা</h3>
                    <p></p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="image-effect-one1 hover-shadow">
                            <a href="{{ route('our.service') }}#paid-service"><img src="{{ url('assets/images/features-01.png') }}" alt="Towhid Foundation Free Service" /></a>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="image-effect-one1 hover-shadow">
                            <a href="{{ route('our.service') }}#free-service"><img src="{{ url('assets/images/features-02.png') }}" alt="" /></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- OUR SPECIALLIZATION END -->

    <!-- ABOUT COMPANY SECTION START -->

    @include('theme.include.qoute')
    <!-- ABOUT COMPANY SECTION END -->

    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-t80 p-b50 bg-gray bg-no-repeat bg-bottom-right" style="background-image:url(assets/images/background/bg-4.png);">
        <div class="container">
            <div class="section-content ">
                <div class="row">
                    <div class="col-md-12 col-sm-12  m-b30">
                        <div class="brochur bg-dark p-a20">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="p-a30 bg-primary bg-bottom-right" style="background-image:url(assets/images/background/bg-site.png);">
                                        <div class="text-white text-center">
                                            <h4 class="mt-tilte m-t0">একটি সম্পূর্ণ অ- রাজনৈতিক ও অ- লাভজনক স্বেচ্ছাসেবী প্রতিষ্ঠান</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-white p-a25 text-center">
                                        <h4 class="mt-tilte">গরীব অসহায়দের জন্য লাশের কাপড়, কফিন ও অন্যান্য উপকরণ সহ এম্বুলেন্স সার্ভিস ফ্রী</h4>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="p-a30 bg-primary bg-bottom-right" style="background-image:url(assets/images/background/bg-site.png);">
                                        <div class="text-white text-center">
                                            <h4 class="mt-tilte m-t0">এছাড়া বিশেষ উপলক্ষ্যে এবং দুর্যোগময় মুহূর্তে প্রয়োজনীয় সেবা কার্যক্রম পরিচালনা</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->


</div>

@endsection
