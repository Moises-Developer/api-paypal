<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid alinear">
    <a class="navbar-brand" href="#">Sistema De Concesionaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
            @include('empresa/vendedor')
        </li>
        <li class="nav-item">
            @include('cliente/cliente')
        </li>
        <li class="nav-item">
            @include('empresa/coche_nuevo')
        </li>
        <li class="nav-item">
            @include('empresa/venta')
        </li>
        <li class="nav-item">
            @include('empresa/marca')
        </li>
        <li class="nav-item">
            @include('empresa/modelo')
        </li>
        <li class="nav-item">
            @include('empresa/version')
        </li>
      </ul>
    </div>
  </div>
</nav>