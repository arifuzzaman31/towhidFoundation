@extends('app')
@section('title')
{{ $blog->title }}
@endsection
@section('meta')
    <meta property="og:url"          
        content="{{ route('get-specific-blog',['slug' => $blog->slug]) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image"        
         content="{{asset('images/blog-image/'.$blog->blog_image)}}" />

    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->description }}" />
@endsection
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-blog-content">
                    <div class="single-blo-feature-image mb-45" data-background="{{asset('images/blog-image/'.$blog->blog_image)}}">
                        
                    </div>
                    
                    <div class="blog-post-inner-content">
                        <h2 class="post-title">{{ $blog->title }}</h2>
                        <p class="mt-15">{!! $blog->description !!}</p>
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