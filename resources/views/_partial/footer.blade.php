<footer class="footer-area">
    <div class="position-relative">
        <div class="header-top pt-125 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="widget footer-sidebar">
                            <div class="site-logo footer-site-info">
                                <a href="{{url('/')}}">
                                    <img src="@if (app()->isLocale('en')){{asset('assets/img/site-logo/en_bottom.png')}}@else {{asset('assets/img/site-logo/logo-bottom.png')}} @endif" alt="">
                                </a>
                                <p class="mt-30">@lang('hero_area.tf_sentence')</p>
                            </div>
                            <div class="social-list footer-social-list mt-20">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="widget footer-sidebar">
                            <h3 class="mb-45">@lang('footer.our_institute')</h3>
                            <ul>
                                <li><a href="#about">@lang('footer.about_us')</a></li>
                                <li><a href="#services">@lang('footer.service')</a></li>
                                <li><a href="#contact">@lang('footer.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="widget footer-sidebar">
                            <h3 class="mb-45">@lang('footer.our_service')</h3>
                            <ul>
                                <li><a href="#minimum-price">@lang('footer.low_cost')</a></li>
                                <li><a href="#free-service">@lang('footer.free_service')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="widget footer-sidebar">
                            <h3 class="mb-45">@lang('footer.contact_us')</h3>
                            <div class="footer-contact-info">
                                <p><strong>@lang('footer.address')</strong> @lang('footer.address_des')</p>
                                <p><strong>@lang('footer.email')</strong>towhid.foundation@gmail.com</p>
                                <p><strong>@lang('footer.phone')</strong> @lang('footer.phone_no')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bootom pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="copyright-content">
                            <p>© {{ date('Y') }} Developed By <a href="https://limmexbd.com" target="_blank" title="Limmex Automatoin">Limmex Automation.</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">@lang('footer.terms_condition')</a></li>
                                <li><a href="#">@lang('footer.privacy_policy')</a></li>
                                <li><a href="#">@lang('footer.help')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>