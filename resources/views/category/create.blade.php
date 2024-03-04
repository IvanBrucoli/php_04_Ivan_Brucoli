<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-4">CREA LA CATEGORIA</h1>
            </div>
        </div>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-5 shadow rounded" method="POST" action="{{route('category.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Input-Name" class="form-label">Inserisci il nome della categoria</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{old('name')}}" id="name">
                        @error('name')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Descrivi la categoria </label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description')}}
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Invio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>