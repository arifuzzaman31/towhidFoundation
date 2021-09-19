@extends('theme.include.master')

@section('meta')
    <meta property="og:image" content="{{ url('assets/images/logo_seo.png') }}" />
    <meta property="og:title" content="Towhid Foundation | Computer Training Registration" />
    <meta property="og:description" content="Towhid Foundation |Register For Computer Training" />
@endsection

@section('title','Computer Training Registration')

@section('content')

<style>
    .main-bar{
        box-shadow: 2px 1px 0px 0px rgb(0 0 0 / 8%);
    }

</style>

<!-- CONTENT START -->
<div class="page-content">



    <!-- SECTION CONTENTG START -->
    <div class="section-full p-tb150">
        <div class="container">
            <div class="section-content">
                <div class="page-notfound text-center">
                    <strong>Computer Training Online Registration </strong>
                    <span class="title">coming soon</span>
                    <a href="{{ url('/') }}" title="Back to home" class="site-button btn-effect m-t30">Back to home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->

@endsection
