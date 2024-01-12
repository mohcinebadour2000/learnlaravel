<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LARAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login.show') }}">Se connecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


