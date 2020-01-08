<style type="text/css">

	body{padding-top:30px;}

	.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

	small {
	display: block;
	line-height: 1.428571429;
	color: #999;
	}
</style>
<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1">
        <div class="well well-sm">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="{{URL::to('images/team-member-image/'.$data->image)}}" height="100" width="90" />
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>
                        {{$data->name}}</h4>
                   <cite title="{!!strtoupper($data->designation)!!}">{{$data->designation}}</cite>
                    <p>
                        <i class="fa fa-facebook-official glyphicon"></i>{{$data->fb_link}}
                        <br />
                        <i class="fa fa-twitter glyphicon"></i>{{$data->tw_link}}
                        <br />
                        <i class="fa fa-instagram glyphicon"></i>{{$data->inst_link}}</p>
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>
