<x-layout>
    <div class="container">
        <div class="row justify-content-center ">
            @if(session('successMail')) 
            <div class="alert alert-success">
                {{session('successMail')}}
            </div>
            @endif
            <div class="col-12">
                <h1 class="display-4 fw-bold text-center">
                    Se ni mondo ci fosse un po' di auto... economiche
                </h1>
            </div>
        </div>
    </div>
    
</x-layout>