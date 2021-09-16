@extends('theme.include.master')

@section('content')


   <!-- CONTENT START -->
   <div class="page-content" id="app">

        <!-- INNER PAGE BANNER -->
        <div class="mt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(assets/images/banner/4.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="mt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="m-b0">Contact US</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                        <div>
                            <ul class="mt-breadcrumb breadcrumb-style-2">
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENTG START -->
        <div class="section-full p-t80 inner-page-padding">
            <!-- LOCATION BLOCK-->
            <div class="container">

                <!-- GOOGLE MAP & CONTACT FORM -->
                <div class="section-content">
                    <!-- CONTACT FORM-->
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                        <contact-us></contact-us>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="contact-info m-b30">
                                <!-- TITLE START -->
                                <div class="section-head">
                                    <div class="mt-separator-outer separator-left">
                                        <div class="mt-separator">
                                            <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">Contact</span> Info</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- TITLE END -->
                                <div class="bg-dark p-a20 text-white">
                                    <div class="mt-icon-box-wraper left p-b40">
                                        <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Phone number</h5>
                                            <p>+88 0130-4004000, +88 0131-7008000</p>
                                        </div>
                                    </div>

                                    <div class="mt-icon-box-wraper left p-b40">
                                        <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Email address</h5>
                                            <p>towhid.foundation@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="mt-icon-box-wraper left">
                                        <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                        <div class="icon-content">
                                            <h5 class="m-t0 font-weight-500">Address info</h5>
                                            <p>17/4 Tolarbagh, Mirpur-1, Dhaka-1216</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="gmap-outline">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.841779796166!2d90.34986061536313!3d23.78864789323021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1c9c23167e7%3A0x5923ef623999b7df!2stowhid%20foundation!5e0!3m2!1sen!2sbd!4v1631091651386!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
       </div>

        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection


@push('script')

<script src="{{ asset('/public/js/app.js') }}" ></script>

@endpush
