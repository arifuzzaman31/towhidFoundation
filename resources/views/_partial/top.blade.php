<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Towhind-Foundation">
    <meta name="keyword" content="তৌহিদ ফাউন্ডেশন,Towhind Foundation,Foundation in Dhaka,Free Ambulance Service in Dhaka,Free Primary Treatment Dhaka,Free Computer Course in Dhaka,Free Eye Operation Dhaka,Wasing Dead Body in Dhaka,Towhind,Foundation,lash gosol,প্যাথলজিক্যাল পরীক্ষা নিরীক্ষা,অ্যাম্বুলেন্স সার্ভিস,ফিজিওথেরাপি,লাশের কাপড়, কফিন ও অন্যান্য উপকরণ,সেলাই প্রশিক্ষণ">
    @yield('meta')
     <!-- Title-->
    <title>@yield('title','তৌহিদ ফাউন্ডেশন')</title>
    <!-- Style CSS -->
  
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @include('toastr.toastrcss')
    @stack('style') 
</head>

<body>