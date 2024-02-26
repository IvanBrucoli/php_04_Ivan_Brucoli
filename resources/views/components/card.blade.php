<div class="col-12 col-md-3 col-lg-4 d-flex justify-content-center py-5">
  <div class="card" style="width: 18rem;">
    <div class="card-img-gradient d-flex justify-content-center">
      @if(!$car->image)
    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
    @else
    <img src="{{Storage::url($car->image)}}" class="card-img-top" alt="...">
    @endif
  </div>
    <div class="card-body">
      <h5 class="card-title">{{$car->name}}</h5>
      <p class="card-text">{{$car->model}}</p>
      <p class="card-text">{{$car->condition}}</p>
      <p class="card-text">{{$car->price}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
