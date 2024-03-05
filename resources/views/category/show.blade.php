<x-layout>
    <div class="container h-100">
        <div class="row justify-content-center ">
            <div class="swiper-pagination"></div>
        </div>
        <h1 class="display-4 fw-bold text-center">
            Dettaglio della categoria {{$category->name}}
        </h1>
    </div>
    </div>
    <div class="row justify-content-center py-5">
        <p>{{$category->description}}</p>
        <p class="text-muted">inserito da: </p>
    </div>
    </div>


</x-layout>