<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-4">MODIFICA LA CATEGORIA: {{$category->name}}</h1>
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
                <form class="p-5 shadow rounded" method="POST" action="{{route('category.update',compact('category'))}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input-Name" class="form-label">Nuovo nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{$category->name}}" id="name">
                        @error('name')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Nuova descrizione </label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$category->description}}
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>