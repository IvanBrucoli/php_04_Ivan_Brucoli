<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            @if(session('successMail')) 
            <div class="alert alert-success">
                {{session('successMail')}}
            </div>
            @endif
            @if(session('success')) 
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <div class="col-12">
                <h1 class="display-4 fw-bold text-center">
                    Se ni mondo ci fosse un po' di auto... economiche
                </h1>
            </div>
        </div>
        <div class="row justify-content-center py-5">
            @foreach ($cars as $car)
                <div class="col-12 col-md-3 col-lg-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$car->name}}</h5>
                          <p class="card-text">{{$car->model}}</p>
                          <p class="card-text">{{$car->condition}}</p>
                          <p class="card-text">{{$car->price}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>