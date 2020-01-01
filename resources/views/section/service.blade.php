<section id="services" class="service position-relative pt-60">
    @if(count($paidServices) > 0)
    <div class="container" id="সল্পমূল্যে">
        <div class="row">
        <div class="col-xl-5">
            <div class="section-title mb-45">
                <h4 class="text-center our-service">আমাদের সেবা</h4>
                <h1>সল্পমূল্যে সেবা সমূহ</h1>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($paidServices as $service)
                <div class="col-12 col-sm-6 col-md-4 image-grid-item text-center">
                    <div style="background-image: url({{URL:: to('images/service-image/'.$service->image)}} );" class="image-grid-cover">
                        <a href="#" class="image-grid-clickbox"></a>
                        <a href="#" class="cover-wrapper">{{$service->title}}</a>
                        <button class="servicebtn btn btn-info" data-toggle="modal" data-target="#serviceModal" data-whatever="{{$service->id}}-{{$service->title}}">সার্ভিসটি গ্রহণ করুন</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </br>
    @endif

     @if(count($freeServices) > 0)
    <div class="container" id="বিনামূল্যে">
        <div class="row">
        <div class="col-xl-5">
            <div class="section-title mb-45">
                <h1>বিনামূল্যে সেবা সমূহ</h1>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($freeServices as $service)
                <div class="col-12 col-sm-6 col-md-4 image-grid-item text-center">
                    <div style="background-image: url({{URL:: to('images/service-image/'.$service->image)}});" class="image-grid-cover">
                        <a href="#" class="image-grid-clickbox"></a>
                        <a href="#" class="cover-wrapper">{{$service->title}}</a>
                        <button class="servicebtn btn btn-info" data-toggle="modal" data-target="#serviceModal" data-whatever="{{$service->id}}-{{$service->title}}">সার্ভিসটি গ্রহণ করুন</button>
                    </div>
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