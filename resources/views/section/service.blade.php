<section id="services" class="service position-relative pt-60">
    @if(count($paidServices) > 0)
    <div class="container" id="minimum-price">
        <div class="row">
        <div class="col-xl-5">
            <div class="section-title mb-45">
                <h4 class="text-center our-service">@lang('service.our_service')</h4>
                <h1>@lang('service.low_cost_service')</h1>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($paidServices as $service)
                <div class="col-12 col-sm-6 col-md-4 image-grid-item text-center">
                    <div style="background-image: url({{URL:: to('images/service-image/'.$service->image)}} );" class="image-grid-cover">
                        <a href="{{route('get-specific-service',$service->slug)}}" title="{{$service->title}}" class="image-grid-clickbox"></a>
                        <a href="{{route('get-specific-service',$service->slug)}}"  class="cover-wrapper">{{$service->title}}</a>
                    </div>
                        <button class="mb-35 btn btn-info" data-toggle="modal" data-target="#serviceModal" data-title="{{$service->title}}" data-whatever="{{$service->id}}">@lang('service.get_the_service')</button>
                </div>
            @endforeach
        </div>
    </div>
    </br>
    @endif

     @if(count($freeServices) > 0)
    <div class="container" id="free-service">
        <div class="row">
        <div class="col-xl-5">
            <div class="section-title mb-45">
                <h1>@lang('service.free_service')</h1>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($freeServices as $service)
                <div class="col-12 col-sm-6 col-md-4 image-grid-item text-center">
                    <div style="background-image: url({{URL:: to('images/service-image/'.$service->image)}});" class="image-grid-cover">
                        <a href="{{route('get-specific-service',$service->slug)}}" class="image-grid-clickbox"></a>
                        <a href="{{route('get-specific-service',$service->slug)}}" class="cover-wrapper">{{$service->title}}</a>
                    </div>
                        <button class="mb-35 btn btn-info" data-toggle="modal" data-target="#serviceModal" data-title="{{$service->title}}" data-whatever="{{$service->id}}">@lang('service.get_the_service')</button>
                </div>
            @endforeach
        </div>
    </div>
    </br>
    @endif
</section>
@push('style')
<style>
    @media screen and (min-width: 769px) {
      .our-service {
        border-bottom: 3px solid #121d61;
        margin: 25px 330px;
        padding-bottom: 28px;
      }
    }
</style>
@endpush
