@extends('app')
@section('title')
{!! $services->title !!}
@endsection
@section('meta')
    <meta property="og:url"          
        content="{{ route('get-specific-service',['slug' => $services->slug]) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image"        
         content="{{asset('assets/service-image/'.$services->image)}}" />

    <meta property="og:title" content="@if(app()->isLocale('en')) {!! $services->title_en !!} @else {!! $services->title_bn !!} @endif" />
    <meta property="og:description" content="{{ $services->description }}" />
@endsection
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-blog-content">
                            <div class="single-blo-feature-image mb-45" data-background="{{asset('images/service-image/'.$services->image)}}">
                                
                            </div>
                            <div class="post-meta ppst-meta-content mb-15">
                                <ul>
                                    <li class="float-right"><button class="mb-35 btn btn-info" data-toggle="modal" data-target="#serviceModal" data-title="@if(app()->isLocale('en')) {!! $services->title_en !!} @else {!! $services->title_bn !!} @endif" data-whatever="{{$services->id}}">@lang('service.get_the_service')</button></li>
                                </ul>
                            </div>
                            <div class="blog-post-inner-content">
                                <h2 class="post-title">@if(app()->isLocale('en')) {!! $services->title_en !!} @else {!! $services->title_bn !!} @endif</h2>
                                <p class="mt-15">{!! $services->description !!}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog post area End -->
@endsection

@push('style')
<style>
    
    header.header-area {
    
    background-color: #1a32b7;
    top : 0 !important;

    }
</style>
@endpush