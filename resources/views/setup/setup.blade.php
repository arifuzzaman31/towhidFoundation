@extends('app')
        @section('meta')
        <meta property="og:url"          
         content="{{ url('/') }}" />
        <meta property="og:type"         
         content="website" />

        <meta property="og:title"        
         content="তৌহিদ ফাউন্ডেশন | মানবতার সেবায়" />
        <meta property="og:description"   
        content="একটি সম্পূর্ণ অ-রাজনৈতিক ও অ-লাভজনক সেচ্ছাসেবী প্রতিষ্ঠান" />
        <meta property="og:image"        
         content="{{ asset('images/logo_seo.png') }}" />
        @endsection

	@section('content')
        <!-- Hero area start -->
        @include('section.hero_area')
        <!-- Hero area end -->
        <!-- Feature area start -->
        @include('section.feature')
        <!-- Feature area end -->
        <!-- About area start -->
         @include('section.about')
        <!-- About area end -->
        <!-- Service area start -->
        @include('section.service')
        <!-- Service area end -->
        <!-- Portfolio area start -->
        <!-- include('section.portfolio') -->
        <!-- Portfolio area end -->
        <!-- Team area start -->
        @include('section.gallery')
        <!-- Team area end -->
        <!-- Video area Start -->
       
        <!-- Video area end -->
        <!-- Price area start -->
        <!-- include('section.price_area') -->
        <!-- Price area end -->
        <!-- Plan area Start -->
        @include('section.blog')
        <!-- Plan area end -->
        <!-- Testinonial area Start -->
 
        <!-- Testinonial area end -->
        <!-- Blog area satrt -->

        <!-- Blog area end -->
        <!-- Contact area Start -->
        @include('section.contact')
        <!-- Contact area end -->
 	@endsection

        @push('script')

        <script src="{{ asset('/public/js/app.js') }}" ></script>

        @endpush