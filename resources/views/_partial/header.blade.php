    <!-- Pealoader area start -->
    <div class="prealoader-area-wrapepr">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>
    <!-- Pealoader area end -->
    <header class="header-area" id="header-sticky">
        <div class="menu-area">
            <div class="container">
                <div class="row justify-content-xl-center">
                    <div class="col-xl-2">
                        <div class="site-logo site-top-logo">
                            <a href="{{ url('/') }}" title="তৌহিদ ফাউন্ডেশন">
                                <img src="{{asset('assets/img/site-logo/logo-top.png')}}" alt="তৌহিদ ফাউন্ডেশন লোগো">
                            </a>
                        </div>
                        <div class="responsive-menu d-xl-none d-lg-none"></div>
                    </div>
                    <div class="col-xl-10 text-right d-none d-xl-block d-lg-block">
                        <div class="heus-main-menu">
                            <nav id="mobile-menu">
                                <ul id="menu">
                                    <li><a href="{{ url('/') }}" title="তৌহিদ ফাউন্ডেশন">হোম</a></li>
                                    <li><a href="{{ url('/'.'#about') }}" title="আমাদের সম্পর্কে">আমাদের সম্পর্কে</a></li>
                                    <li><a href="{{ url('/'.'#services') }}" title="সেবাসমূহ">সেবা সমূহ</a></li>
                                    <li><a href="{{route('show-all-member')}}" title="সদস্যবৃন্দ">সদস্যবৃন্দ</a></li>
                                    <li><a href="{{ url('/'.'#gallery') }}" title="ফটোফাইল">ফটো ফাইল</a></li>
                                    <li><a href="{{route('get-all-blog')}}" title="ব্লগ">ব্লগ</a>
                                    <li><a href="{{ url('/'.'#contact') }}" title="যোগাযোগ">যোগাযোগ</a></li>
                                </ul>
                            </nav>
                            <div class="support-btn btn">
                                <a href="tel:01304004000">ফোন করুন<span>০১৩০৪০০৪০০০</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>