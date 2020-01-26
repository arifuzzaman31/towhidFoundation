@extends('app')
@section('title') All Album @endsection
@section('meta')
    <meta property="og:url" content="{{ route('get-more-album') }}" />
    <meta property="og:type" content="website" />
<meta property="og:image" content="{{ asset('images/logo_seo.png') }}" />

    <meta property="og:title" content="Album of Towhid Foundation" />
    <!-- <meta property="og:description" content="@lang('meta.title')" /> -->
@endsection
@section('content')
<section class="team-membar position-relative pt-30 pb-80 theme-bg" style="background: #f2f9ff;">
 <div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3 text-center">
            <div class="section-title mb-45">
                <h4 class="text-uppercase mb-20"></h4>
                <h1>@lang('gallery.our_gallery')</h1>
            </div>
        </div>
    </div>
 <fullgallery :albums="{{ $albums }}"></fullgallery>
</div>
</section>
@endsection
	@push('script')

	<script src="{{ asset('/public/js/app.js') }}" ></script>

	@endpush
@push('style')
<style>
    
    header.header-area {
    
    background-color: #1a32b7;
    top : 0 !important;

    }
</style>
@endpush