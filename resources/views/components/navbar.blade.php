<nav class="navbar navbar-expand-lg navbar-light bg-white shadow py-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('/icons/logo.svg') }}" width="40px" height="40px" alt="Kamplink logo">
        <span>
          <strong>Kamplink</strong>
        </span>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active mx-1" aria-current="page" href="{{ route('contact') }}">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active mx-1" href="{{ route('auth.login.create') }}">Iniciar sesion</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-info text-white px-3" href="{{ route('auth.register.create') }}" tabindex="-1" aria-disabled="true">Crear una cuenta</a>
          </li>
        </ul>

      </div>
    </div>
</nav>