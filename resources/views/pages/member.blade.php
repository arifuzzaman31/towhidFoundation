@extends('app')
@section('title','তৌহিদ ফাউন্ডেশন | সদস্য')
@section('meta')
<meta property="og:url"          
content="{{ route('get-all-blog') }}" />
<meta property="og:type" content="website" />
<meta property="og:image"        
content="{{ asset('images/logo_seo.png') }}" />

<meta property="og:title" content="তৌহিদ ফাউন্ডেশন | সদস্যবৃন্দ" />
<meta property="og:description" content="মানবতার সেবায়। একটি সম্পূর্ণ অ-রাজনৈতিক ও অ-লাভজনক সেচ্ছাসেবী প্রতিষ্ঠান" />
@endsection
@section('content')
<section id="about" class="video-area position-relative pt-125 pb-125">
    <div class="container">
        <div class="row text-justify" >
            <div class=" col-md-5" align="center">
                <img class="img-fluid" src="{{ url('images/chairman.jpg') }}">
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="video-content-inner">
                    <h1 class="mb-20">তৌহিদ ফাউন্ডেশন</h1>
                    <h5>
                    ভাষা আন্দোলন ও একাত্তরের মুক্তিযুদ্ধ থেকে শুরু করে বাংলাদেশের সব গণতান্ত্রিক ও নাগরিক আন্দোলনে একজন সামনের সারির যোদ্ধা অধ্যাপক ড. অজয় রায়। তিনি শুধু পদার্থবিজ্ঞানী এবং প্রথিতযশা শিক্ষকই ছিলেন না, ছিলেন বিজ্ঞান শিক্ষার একজন নিবেদিতপ্রাণ গবেষক। আজীবন অসাম্প্রদায়িক চেতনার চর্চা তাকে এক অনন্য উচ্চতায় নিয়ে গেছে। এ কারণেই তিনি সকলের কাছে এক আদর্শ হয়ে থাকবেন।জ্ঞান ও মানুষের কল্যাণে জীবন উৎসর্গ করা মানুষটির প্রতি রইলো আমাদের বিনম্র শ্রদ্ধা।</h5> <br><br>
           			<h5  style="font-size: 1.5em">চেয়ারম্যান, <br> তৌহিদ ফাউন্ডেশন</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-50 pb-100">
<div class="container">
        <div class="row">
        <div class="col-xl-5">
            <div class="section-title mb-45">
                <h4 class="text-center our-service">আমাদের সদস্য</h4>
            </div>
        </div>
    </div>
        <div class="row">
        	@if(count($members) > 0)
    		@foreach($members as $member)
    			<div class="col-md-3 col-sm-12">
					<div class="card card-body text-center" style="box-shadow: none !important; border:none !important;">
						<div class="avatar mx-auto my-3" style="max-width: 150px;">
							<img src="{{asset('images/team-member-image/'.$member->image)}}" class="rounded-circle img-fluid" alt="{{$member->name}}" height="300" width="300">
						</div>
						<h5 class="font-weight-bold">
							<strong>{{ $member->name }}</strong>
						</h5>
						<p class="grey-text">{{ $member->designation }}</p>

						<ul class="list-unstyled">
							<!-- Facebook -->
							<a href="{{ $member->fb_link }}" target="_blank" class="icons-sm fb-ic">
								<i class="fa fa-facebook blue-text"> </i>
							</a>
							<!-- Twitter -->
							<a href="{{ $member->tw_link }}" target="_blank" class="icons-sm tw-ic">
								<i class="fa fa-twitter blue-text"> </i>
							</a>
							<!-- Instagram -->
							<a href="{{ $member->inst_link }}" target="_blank" class="icons-sm ins-ic">
								<i class="fa fa-instagram blue-text"> </i>
							</a>
						</ul>
					</div>	
		          </div>
    		@endforeach
        	@endif
        </div>
    </div>
</section>
@endsection

@push('style')
<style type="text/css">
	header.header-area {
    
    background-color: #1a32b7;
    top : 0 !important;

    }

    .icons-sm {
    	margin : 5px 9px !important;
    }

    .fb-ic {

     color: #3b5998;

    }

    .ins-ic {
     
     color: #3f729b;

    }
    @media screen and (min-width: 769px) {
      .our-service {
        border-bottom: 3px solid #121d61;
        margin: 25px 330px;
        padding-bottom: 28px;
      }
    }  
</style>
@endpush