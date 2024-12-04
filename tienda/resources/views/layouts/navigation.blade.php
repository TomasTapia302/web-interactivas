<nav class="navbar navbar-expand-lg bg-primary text-white">
    <div class="container-fluid bg-primary text-white">
        <a class="navbar-brand text-white" href="{{ route('home') }}">Store</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('hombres') }}">Hombres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('mujeres') }}">Mujeres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('accesorios') }}">Accesorios</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a class="nav-link text-white" href="carrito">Carrito</a>
                <a class="nav-link text-white" href="ordenes">Órdenes</a>
                <!-- Enlace para Agregar Artículo -->
                <a class="nav-link text-white" href="/agregar_articulo">Agregar Artículo</a>
                
                <!-- Menú Desplegable de Usuario -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" aria-expanded="false">
                        Usuario
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/profile">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="/MisArticulos">Mis Artículos</a></li>
                        <li><a class="dropdown-item" href="/Ganancias">Ganancias</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Script para el menú desplegable de usuario -->
<script>
    document.querySelector('.dropdown-toggle').addEventListener('click', function() {
        var dropdownContent = document.querySelector('.dropdown-menu');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    window.onclick = function(event) {
        if (!event.target.matches('.dropdown-toggle')) {
            var dropdowns = document.getElementsByClassName("dropdown-menu");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === 'block') {
                    openDropdown.style.display = 'none';
                }
            }
        }
    }
</script>
