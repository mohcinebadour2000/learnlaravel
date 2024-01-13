<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LARAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comptes.index') }}">compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('informations.index') }}">informations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comptes.create') }}">Ajouter un profile</a>
                </li>

                {{-- @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endauth--}}

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.show') }}">Se connecter</a>
                    </li>
                @endguest


            </ul>

            @auth
                <div class="dropdown">
                    <button class="btn btn-warning btn-sm dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>{{ ucfirst(auth()->user()->name) }}</b>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}"> {{ __("Deconnexion") }} </a>
                    </div>
                </div>
            @endauth




            {{--
            <div class="btn-group">
            <button class="btn btn-warning btn-sm text-white" type="button">
                Se connecter
            </button>
            <button type="button" class="btn btn-sm btn-warning text-white dropdown-toggle dropdown-toggle-split"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only"></span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Deconnexion</a>
            </div>
        </div> --}}




        </div>
    </div>
</nav>
