<section class="team-membar position-relative pt-30 pb-80 theme-bg" id="team" style="background: #cddee4;">
     <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20"></h4>
                    <h1>Our <br> Gallary </h1>
                </div>
            </div>
        </div>
       <!-- <div class="row">
        @if(count($team_members) > 0)
        @foreach($team_members as $team_member)
            <div class="col-xl-4 col-lg-4">
                <div class="single-team text-center pb-10 pt-10 pl-10 pr-10 bg-white">
                    <div class="team-bg position-relative" data-background="{{asset('images/team-member-image/'.$team_member->image)}}">
                        <div class="member-social-link">
                            <ul>
                                <li><a href="{{$team_member->fb_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="{{$team_member->tw_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="{{$team_member->in_link}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta pt-40 pb-40">
                        <h4>{{$team_member->caption}}<span>{{$team_member->created_at->diffForHumans()}}</span></h4>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </div> -->
<div class="container">
    <div class="row">
            @if(count($team_members) > 0)
                @foreach($team_members as $team_member)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="$team_member->id" data-toggle="modal" data-title="@if($team_member->caption){{$team_member->caption}} @else This is Nice Picture @endif"
                   data-image="{{asset('images/team-member-image/'.$team_member->image)}}"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="{{asset('images/team-member-image/'.$team_member->image)}}"
                         alt="Another alt text">
                </a>
            </div>
                @endforeach
            @endif
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>
                        <h4 class="modal-title text-center" id="image-gallery-title"></h4>
                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@push('style')
<style>
    .btn:focus, .btn:active, button:focus, button:active {
      outline: none !important;
      box-shadow: none !important;
    }

    #image-gallery .modal-footer{
      display: block;
    }

    .thumb{
      margin-top: 15px;
      margin-bottom: 15px;
    }
</style>
@endpush