@extends('theme.include.master')


@section('content')


  <!-- CONTENT START -->
  <div class="page-content">


      <!-- SLIDER START -->
      <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header">
          <div id="rev_slider_one" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.1">
              <ul>

                 @php
                  $slider = getSlider();
                 @endphp
                  <!-- SLIDE 1 -->
                  @foreach($slider as $value)
                  <li data-index="rs-90{{ $value->id }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                      data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                       data-thumb="{{ url('images/slider/'.$value->image) }}"
                       data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300"
                        data-fsslotamount="7" data-saveperformance="off">
                      <!-- MAIN IMAGE -->
                      <img src="{{ url('images/slider/'.$value->image) }}" alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                       data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" />
                      <!-- LAYERS -->
                      <!-- LAYER NR. 1 [ for overlay ] -->
                      <div class="tp-caption tp-shape tp-shapewrapper " id="slide-90{{ $value->id }}-layer-0"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                            data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" style="z-index: 1;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                      </div>
                  </li>
                  @endforeach
              </ul>
              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
          </div>
      </div>
      <!-- SLIDER END -->




      <!-- OUR SPECIALLIZATION START -->
      <div class="section-full  p-b30 " style="background-image:url(assets/images/background/bg-5.png);">
          <div class="container">
              <!-- IMAGE CAROUSEL START -->
              <div class="section-content">

                  <!-- ABOUT COMPANY START -->
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
      <!--ABOUT COMPANY END -->


      <!-- NEWS  -->
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
      <!-- NEWS -->


    @include('theme.include.qoute')



      <!--start service-->
      <div class="section-full p-b30 " style="background-image: url({{URL:: to('assets/images/background/bg-5.png')}});">
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
      <div class="section-full p-t80 p-b30 bg-dark" style="background-image:url(assets/images/background/bg-6.png);">
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
                          <div class="page-notfound text-center">
                              <a href="tel:// 01824 148970 "><h2 class="blue-color"> 01824 148970 </h2></a>
                              <p>(10 AM - 10 PM পর্যন্ত কল করুন)</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--   end popup model-->



      <!--    start photo albam-->
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
                                                              <a href="single-photo-gallery.php" class="site-button m-t10 "> অল ফটো  </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              @endif
                                              @endforeach
                                          </div>
                                          <!-- GALLERY CONTENT END -->
                                          <div class="m-t50 m-b50 text-center">
                                              <a href="photo-albam.php" class="m-b15 site-button-secondry btn-effect text-uppercase ">অল অ্যালবাম </a>
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
      <!--    end photo albam-->
  </div>
  <!-- CONTENT END -->

@endsection
