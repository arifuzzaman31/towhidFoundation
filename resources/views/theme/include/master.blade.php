<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="XZL3m0O0AH9CWAMEbkAKtUIFMW633GRo6bQ67ej1">
    <meta name="author" content="Towhind-Foundation">
    <meta name="keyword" content="তৌহিদ ফাউন্ডেশন,Towhind Foundation,Foundation in Dhaka,Free Ambulance Service in Dhaka,Free Primary Treatment Dhaka,Free Computer Course in Dhaka,Free Eye Operation Dhaka,Wasing Dead Body in Dhaka,Towhind,Foundation,lash gosol,প্যাথলজিক্যাল পরীক্ষা নিরীক্ষা,অ্যাম্বুলেন্স সার্ভিস,ফিজিওথেরাপি,লাশের কাপড়, কফিন ও অন্যান্য উপকরণ,সেলাই প্রশিক্ষণ">
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ url('assets/images/logo_seo.png') }}" />
    @yield('meta')

    <meta property="og:title" content="Towhid Foundation | Members" />
    <meta property="og:description" content="Towhid Foundation | Made for Humanity" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Title-->
    <title>@yield('title','Towhid Foundation')</title>

    <!-- MOBILE SPECIFIC -->


    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome/css/font-awesome.min.css') }}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loader.min.css') }}">

    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.min.css') }}">

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('assets/css/skin/skin-1.cs') }}s">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">

    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1">
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="mt-topbar-left clearfix">
                            <ul class="list-unstyled e-p-bx pull-right">
                                <b>একটি সম্পূর্ণ অ- রাজনৈতিক ও অ- লাভজনক স্বেচ্ছাসেবী প্রতিষ্ঠান </b>
                            </ul>
                        </div>
                        <div class="mt-topbar-right clearfix">
                            <div class="appint-btn"><a href="coming-soon.php" class="site-button"> কম্পিউটার প্রশিক্ষণ রেজিঃ </a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{ url('/') }}">
                                    <img src="{{ url('assets/images/towhidfoundation-logo.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#" class="contact-slide-show"><i class="fa fa-angle-left arrow-animation"></i></a>
                            </div>
                        </div>
                        <!-- ETRA Nav -->

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                 <li>
                                    <a href="#">About</a>
                                       <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('about.us') }}" title="About Towhid Foundation"> About US</a>
                                            </li>
                                            <li>
                                                <a href="Objectives.php"> Towhidfoundation Objectives</a>
                                            </li>
                                            <li>
                                                <a href="success-activities.php"> Success Activities </a>
                                            </li>
                                        </ul>
                                </li>

                                <li>
                                    <a href="{{ route('our.service') }}" title="Services">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('our.member') }}" title="Members">Members</a>
                                </li>
                                <li>
                                    <a href="{{ route('our.blog') }}" title="Media & News">Media & News</a>
                                </li>
                                <li>
                                    <a href="photo-albam.php" title="Photo Album">Photo Gallery</a>
                                </li>
                                <li>
                                    <a href="notice.php" title="Notice">Notice</a>
                                </li>
                                <li>
                                    <a href="contact-us.php" title="Contact Us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Contact Nav -->
                        <div class="contact-slide-hide " style="background-image:url(assets/images/background/bg-5.png)">
                            <div class="contact-nav">
                                <a href="javascript:void(0)" class="contact_close">&times;</a>
                                <div class="contact-nav-form p-a30">
                                    <div class="contact-info   m-b30">

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Phone number</h5>
                                                <p>+88 0130-4004000, +88 0131-7008000</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Email address</h5>
                                                <p>towhid.foundation@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="mt-icon-box-wraper center p-b30">
                                            <div class="icon-xs m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500">Address info</h5>
                                                <p>17/4 Tolarbagh, Mirpur-1, Dhaka-1216</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="full-social-bg">
                                        <ul>
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <span class="copyrights-text">© 2021 Developed By <a style="color: #0066B3;" href="https://automation.limmexbd.com/">Limmex Automation.</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>



        </header>
        <!-- HEADER END -->

        @yield('content')

                <!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-dark	footer-wide">
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{ url('assets/images/towhidfoundation-logo-white.png') }}" alt=""></a>
                                </div>
								<p class="max-w400">A Completely non-political and non-profit Voluntary Organization</p>
                                <ul class="social-icons  mt-social-links">
                                    <li><a target="_blank" href="https://www.facebook.com/TowhidFoundation/" class="fa fa-facebook"></a></li>
                                </ul>
                            </div>
                        </div>

                          <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">Our Organization</h4>
                                <ul>
                                   <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact US</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h4 class="widget-title">Our Services</h4>
                                <ul>
                                   <li><a href="#">Low Cost Services</a></li>
                                    <li><a href="#">Free Services</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_address_outer">
                                <h4 class="widget-title">Contact Us</h4>
                                <ul class="widget_address">
                                    <li><b>Address :</b> 17/4 Tolarbagh, Mirpur-1, Dhaka-1216</li>
                                    <li><b>Email:</b> towhid.foundation@gmail.com</li>
                                    <li><b>Phone :</b> +88 0130-4004000, +88 0131-7008000</li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                      <div class="mt-footer-bot-center">
                            <span class="copyrights-text">© {{ date('Y') }} Developed By <a style="color: #0066B3;" title="Limmex Automation" href="https://automation.limmexbd.com/">
                            <img src="{{ url('assets/images/limmex-automation.png') }}" alt="Limmex Automation"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative text-white" id="btn-vibrate"></span></button>

    </div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-loader">Loading</div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

<script  src="{{ asset('assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script  src="{{ asset('assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

<script  src="{{ asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script src="{{ asset('assets/js/jquery.owl-filter.j') }}s"></script>

<script  src="{{ asset('assets/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->


<script  src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script  src="{{ asset('assets/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
<script  src="{{ asset('assets/js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script src="{{ asset('assets/js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->
<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.j') }}s"></script>
<script  src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('assets/js/rev-script-2.js') }}"></script>
<script  src="{{ asset('assets/js/swithcher.js') }}"></script>

</body>

</html>
