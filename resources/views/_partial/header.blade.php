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
                            <a href="{{ url('/') }}" title="@lang('header.tf')">
                                <img src="{{asset('assets/img/site-logo/logo-top.png')}}" alt="@lang('header.tf_logo')">
                            </a>
                        </div>
                        <div class="responsive-menu d-xl-none d-lg-none"></div>
                    </div>
                    <div class="col-xl-10 text-right d-none d-xl-block d-lg-block">
                        <div class="heus-main-menu">
                            <nav id="mobile-menu">
                                <ul id="menu">
                                    <li><a href="{{ url('/') }}" title="@lang('header.tf')">@lang('header.home')</a></li>
                                    <li><a href="{{ url('/'.'#about') }}" title="@lang('header.about_us')">@lang('header.about_us')</a></li>
                                    <li><a href="{{ url('/'.'#services') }}" title="@lang('header.services')">@lang('header.services')</a></li>
                                    <li><a href="{{route('show-all-member')}}" title="@lang('header.members')">@lang('header.members')</a></li>
                                    <li><a href="{{ url('/'.'#gallery') }}" title="@lang('header.photo_file')">@lang('header.photo_file')</a></li>
                                    <li><a href="{{route('get-all-blog')}}" title="@lang('header.blog')">@lang('header.blog')</a>
                                    <li><a href="{{ url('/'.'#contact') }}" title="@lang('header.contact')">@lang('header.contact')</a></li>
                                    @if (app()->isLocale('en'))
                                        <li><a href="{{ url('locale/bn') }}" ><i class="fa fa-language"></i> বাংলা</a></li>
                                    @else
                                        <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> english</a></li>
                                    @endif
                                </ul>
                            </nav>
                            <div class="support-btn btn">
                                <a href="tel:01317008000">@lang('header.call_us')<span>@lang('header.cell_no')</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>