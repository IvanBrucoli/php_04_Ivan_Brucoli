<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">AutoMondo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car.index') }}">Le nostre auto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.us') }}">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car.create') }}">Metti in vendita la tua auto</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area Utente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    </ul>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href=""  onclick="event.preventDefault();
                        document.querySelector('#form-logout').submit();" class="dropdown-item">Logout</a></li>
                        <form action="{{route('logout')}}" method="POST" id="form-logout">@csrf</form>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
