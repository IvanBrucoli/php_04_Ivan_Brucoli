<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-4">VENDI LA TUA AUTO</h1>
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
                <form class="p-5 shadow rounded" method="POST" action="{{ route('car.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Input-Name" class="form-label">Scrivi la marca</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{old('name')}}" id="Input-Name">
                        @error('name')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="InputModel" class="form-label">Inserisci il modello</label>
                        <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{old('model')}}" id="InputModel">
                        @error('name')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Scrivi la condizione dell'auto: </label>
                        <textarea name="condition" id="" cols="30" rows="10" class="form-control @error('condition') is-invalid @enderror">{{old('condition')}}
                        </textarea>
                        @error('condition')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Inserisci il prezzo di acquisto</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"value="{{old('price')}}" id="price">
                        @error('price')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Inserisci una foto della macchina:</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                        <div class="alert alert-danger my-2">{{$message}}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Invio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>