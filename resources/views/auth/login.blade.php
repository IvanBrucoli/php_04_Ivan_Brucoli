<x-layout>
    <div class="container">
        
        <div class="row mt-5 justify-content-center align-items-center vh-100">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12 d-flex align-items-center justify-content-center ">
                
                
                <form class="w-50 border rounded p-5" method="POST" action="{{route('login')}}">
                    @csrf
                    <p class="fw-bold text-center fs-3">Accedi</p>
                    <div class="mb-3">
                        <label for="email" class="form-label">inserisci la tua email:</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">inserisci la tua password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class=" d-flex align-items-center justify-content-center w-100 mt-5">
                        <button type="submit" class="btn btn-primary  ">Submit</button>
                    </div>
                </form>
                
                
            </div>
            
            
            
        </div>
        
        
    </div>
</x-layout>