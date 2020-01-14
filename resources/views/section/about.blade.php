<section id="about" class="video-area position-relative pt-125 pb-125">
    <div class="container">
        <div class="row text-justify" >
            <div class=" col-md-5" align="center">
                <img class="img-fluid" src="{{asset('assets/img/site-logo/about.png')}}" alt="@lang('hero_area.tf')">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="video-content-inner">
                    <h1 class="mb-20">@lang('hero_area.tf')</h1>
                    <h5>@lang('hero_area.about_text')</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="position-relative pt-100 pb-100" style="background-image: -webkit-linear-gradient( -18deg, rgb(37, 123, 208) 0%, rgb(175, 197, 54) 100%);">
    <div class="container">
        <div class="row text-justify" >
            <div class=" col-md-5" align="center">
                <img class="img-fluid" src="{{ url('images/chairman.jpg') }}">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="video-content-inner">
                    <h1 class="mb-10">@lang('member.chairman_speech')</h1>
                    <h5>@if (app()->isLocale('en'))
                        {!! substr( __('member.chairman_text'),0,500) !!}. . .
                        @else
                        {!! substr( __('member.chairman_text'),0,1200) !!}. . .
                        @endif
                         <a href="{{route('show-all-member')}}" style="color: rgba(56, 57, 57, 0.77); font-weight: 100;">@lang('member.read_more')</a>
                   </h5> <br><br>
                    <h5  style="font-size: 1.5em">@lang('member.chairman'), <br> @lang('member.tf')</h5>
                </div>
            </div>
        </div>
    </div>
</section>