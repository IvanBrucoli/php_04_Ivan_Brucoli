<x-layout>
    <h1>Le nostre Macchine</h1>
    <div class="container min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($cars as $car)
                <div class="col-12 col-md-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$car['name']}} {{$car['model']}}</h5>
                            <p class="text-muted fst-italic"> Stato: {{$car['condition']}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</x-layout>