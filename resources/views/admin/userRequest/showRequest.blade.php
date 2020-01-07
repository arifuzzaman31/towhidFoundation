
<div class="card" style="width: 50%; padding-top: 18px; padding-bottom: 16px">
  <img class="card-img-top" src="{{URL::to('images/service-image/'.$data->service_name->image)}}" width="286" height="180" fill="#777" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$data->service_name->title}}</h5>
    <p class="card-text">{{$data->message}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name : {{$data->name}}</li>
    <li class="list-group-item">Phone : {{$data->phone}}</li>
    <li class="list-group-item">Address: {{$data->address}}</li>
  </ul>
  <div class="card-body m-auto">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
  </div>
</div>
