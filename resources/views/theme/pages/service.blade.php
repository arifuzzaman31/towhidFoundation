@extends('theme.include.master')

@section('meta')
    <meta property="og:image" content="{{ url('assets/images/logo_seo.png') }}" />
    <meta property="og:title" content="Towhid Foundation | Towhid Foundation Service" />
    <meta property="og:description" content="Towhid Foundation | Towhid Foundation Service" />
@endsection

@section('title','Our Services')

@section('content')

<style>
    .image-effect-one1 {
        position: relative;
        overflow: hidden;
        background-color: #000;
    }

    .image-effect-one1 img {
        max-width: 100%;
        width: 100%;
        vertical-align: top;
    }

    .image-effect-one1 .figcaption {
        position: absolute;
        bottom: 0%;
        width: 100%;
        padding: 10px 70px 10px 20px;
        background-color: #ffffff;
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }

    .image-effect-one1 h4,
    .image-effect-one1 p {
        /* opacity: 0; */
        margin: 0;
        padding: 0;
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }

    .image-effect-one1 img {
        -webkit-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    .image-effect-one1:hover img {
        zoom: 1;
        filter: alpha(opacity=30);
        -webkit-opacity: 0.3;
        opacity: 0.3;
        -webkit-transform: translateY(-40px);
        transform: translateY(-40px);
    }
</style>


<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
    style="background-image:url({{URL:: to('assets/images/banner/4.jpg')}});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="mt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="m-b0">আমাদের সেবা</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="mt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>আমাদের সেবা</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->



      <!--start service-->
      <div class="section-full p-b30 " id="free-service" style="background-image: url({{URL:: to('assets/images/background/bg-5.png')}});">
          <div class="container">
              <!-- IMAGE CAROUSEL START -->
              <div class="section-content">

                  <!-- TITLE START -->
                  <div class="section-head m-t50">
                      <div class="mt-separator-outer  text-center">
                          <div class="mt-separator">
                              <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">বিনামূল্যে </span> সেবা সমূহ</h2>
                          </div>
                      </div>
                  </div>
                  <!-- TITLE END -->
                  <div class="row">
                  @php
                $freeServices = getFreeService()
                  @endphp
                  @foreach($freeServices as $service)
                      <div class="col-md-4 col-sm-6 m-b30">
                          <div class="image-effect-one1 hover-shadow">
                              <img src="{{ url('images/service-image/'.$service->image) }}" alt="Towhid Foundation {{$service->title_en}}" />
                              <div class="figcaption">
                                  <h4>{{$service->title_bn}}</h4>
                                  <!-- <p>Est notare quam littera gothica, quam nunc putamus parum claram.</p> -->
                                  <div class="appint-btn"><a href="javascript:;" data-toggle="modal" data-target="#services" class="site-button m-t10 w100"> কল করুন </a></div>
                              </div>
                          </div>
                      </div>
                  @endforeach
                  </div>


              </div>
          </div>
      </div>
      <!-- OUR SPECIALLIZATION END -->

      <!-- OUR SPECIALLIZATION START -->
      <div class="section-full p-t80 p-b30 bg-dark" id="paid-service" style="background-image: url({{URL:: to('assets/images/background/bg-6.png')}});">
          <div class="container">
              <!-- IMAGE CAROUSEL START -->
              <div class="section-content">

                  <!-- TITLE START -->
                  <div class="section-head ">
                      <div class="mt-separator-outer  text-center">
                          <div class="mt-separator">
                              <h2 class="text-uppercase sep-line-one text-white"><span class="font-weight-300 text-primary">সল্পমূল্যে </span> সেবা সমূহ</h2>
                          </div>
                      </div>
                  </div>
                  <!-- TITLE END -->
                  <div class="row">
                  @php
                 $paidServices = getPaidService()
                  @endphp
                  @foreach($paidServices as $service)
                      <div class="col-md-4 col-sm-6 m-b30">
                          <div class="image-effect-one1 hover-shadow">
                              <img src="{{ url('images/service-image/'.$service->image) }}" alt="Towhid Foundation {{$service->title_en}}" />
                              <div class="figcaption">
                                  <h4>{{$service->title_bn}}</h4>
                                  <!-- <p>Est notare quam littera gothica, quam nunc putamus parum claram.</p> -->
                                  <div class="appint-btn"><a href="javascript:;" data-toggle="modal" data-target="#services" class="site-button m-t10 w100"> কল করুন </a></div>
                              </div>
                          </div>
                      </div>
                  @endforeach

                  </div>
              </div>
          </div>
      </div>
      <!-- OUR SPECIALLIZATION END -->
      <!--end service-->

    <!--   start popup model-->
    <div id="services" class="modal fade p-r0" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-secondry">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">আমাদের কল করুন</h4>
                </div>
                <div class="modal-body">
                    <div class="section-content">
                      <div class="section-content">
                          <div class="page-notfound text-center">
                              <a href="tel:// 01824 148970 "><h2 class="blue-color"> 01824 148970 </h2></a>
                              <p>(10 AM - 10 PM পর্যন্ত কল করুন)</p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   end popup model-->
</div>



@endsection
