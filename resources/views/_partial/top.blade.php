<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="তৌহিদ ফাউন্ডেশন">
    @yield('meta')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

     <!-- Title-->
    <title>@yield('title','তৌহিদ ফাউন্ডেশন')</title>
    <!-- Style CSS -->
  
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <style type="text/css">
        @font-face {
            font-family: 'SolaimanLipi';
            src: url('{{asset('fonts/SolaimanLipi.ttf')}}');
        }
    </style>
    @stack('style') 
</head>

<body>