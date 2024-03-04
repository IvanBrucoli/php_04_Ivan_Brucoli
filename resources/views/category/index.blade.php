<x-layout>
    <div class="container h-100">
        <div class="row justify-content-center ">
            <div class="swiper-pagination"></div>
        </div>
        <h1 class="display-4 fw-bold text-center">
            Preferisci correre.. o farti superare? Ecco le nostre categorie!
        </h1>
    </div>
    </div>
    <div class="row justify-content-center py-5">
        @foreach ($categories as $category)
            <div class="col-12 col-md-4">
                <div class="col-12 col-md-3 col-lg-4 d-flex justify-content-center py-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-img-gradient d-flex justify-content-center">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <form action="{{route('category.delete',compact('category'))}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger py-5">
                                    Cancella
                                </button>

                            </form>
                            
                            <a href="{{ route('category.edit', compact('category')) }}" class="btn btn-primary">Modifica</a>
                            <a href="{{ route('category.show', compact('category')) }}" class="btn btn-primary">Leggi di più</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>


</x-layout>
