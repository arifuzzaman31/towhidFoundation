@extends('app')
@section('title') @lang('meta.blog') @endsection
@section('meta')
    <meta property="og:url"          
        content="{{ route('get-all-blog') }}" />
    <meta property="og:type" content="website" />
            <meta property="og:image"        
         content="{{ asset('images/logo_seo.png') }}" />

    <meta property="og:title" content="@lang('meta.blog')" />
    <meta property="og:description" content="@lang('meta.title')" />
@endsection
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            @if(count($allblogs) > 0)
            @foreach($allblogs as $blog)
            <div class="col-xl-6 col-lg-6 ">
                <div class="row">
                    <div class="col-xl-12 mb-35">
                        <div class="single-blog-content">
                            <div class="single-blo-feature-image mb-35" data-background="{{URL::to('images/blog-image/'.$blog->blog_image)}}">
                            </div>
                            <div class="blog-post-inner-content">
                                <h4 class="post-title"><a href="{{route('get-specific-blog',$blog->slug)}}">{!! $blog->title !!}</a></h4>
                                <p class="mt-15">{{ Str::limit(strip_tags($blog->description),110) }}
                                    <!-- <div class="blog-readmore-btn"> -->
                                        <a href="{{route('get-specific-blog',$blog->slug)}}"> @lang('member.read_more') <i class="fa fa-angle-right"></i></a>
                                    <!-- </div> -->
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="row">
            {{ $allblogs->links() }}
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