<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-4">VENDI LA TUA AUTO</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-5 shadow rounded" method="POST" action="{{ route('car.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Input-Name" class="form-label">Scrivi la marca</label>
                        <input type="text" class="form-control" name="name" id="Input-Name">
                    </div>
                    <div class="mb-3">
                        <label for="InputModel" class="form-label">Inserisci il modello</label>
                        <input type="text" class="form-control" name="model" id="InputModel">
                    </div>
                    <div class="mb-3"><label for="form-label">Scrivi la condizione dell'auto: </label>
                        <textarea name="condition" id="" cols="30" rows="10" class="form-control">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="InputPrice" class="form-label">Inserisci il prezzo di acquisto:</label>
                        <input type="text" class="form-control" name="price" id="InputPrice">
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Invio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>