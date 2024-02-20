<x-layout>
    <div class="container vh-100 pt-5">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center display-4">
                    Contattaci!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-5 shadow rounded" method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Input-Name" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Inserisci la tua email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3"><label for="form-label">Scrivi la tua poesia: </label>
                        <textarea name="message" id="" cols="30" rows="10" class="form-control">
                            
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
