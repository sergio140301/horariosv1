<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio') }}">ITPN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Cátalogo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item text-primary" href="{{ route('alumnos.index') }}">Alumnos</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('puestos.index') }}">Puestos</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('plazas.index') }}">Plazas</a></li>
                        <li><a class="dropdown-item" href="{{ route('maestros') }}">Maestros</a></li>
                        <li><a class="dropdown-item text-primary" href="{{ route('deptos.index') }}">Departamentos</a></li>
                        <li><a class="dropdown-item" href="{{ route('carreras.index') }}">Carreras</a></li>
                        <li><a class="dropdown-item" href="{{ route('reticulas') }}">Retículas</a></li>
                        <li><a class="dropdown-item" href="{{ route('materias') }}">Materias</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-outline-warning me-2">Registrarse</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar Sesión</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-outline-danger">Salir</button>
                    </form>
                    <div class="text-white ms-3">
                        <p class="mb-0">Usuario: {{ Auth::user()->name }}</p>
                        <p class="mb-0">Correo: {{ Auth::user()->email }}</p>
                    </div>
                @endauth
                <form class="d-flex my-2 my-lg-0">
                    <input
                        class="form-control me-sm-2"
                        type="text"
                        placeholder="Search"
                    />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
