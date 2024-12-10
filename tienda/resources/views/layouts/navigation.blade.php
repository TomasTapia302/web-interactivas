<nav class="navbar navbar-expand-lg bg-primary text-white">
    <div class="container-fluid bg-primary text-white">
        <a class="navbar-brand text-white" href="{{ route('home') }}">Store</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('hombres') }}">Hombres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('mujeres') }}">Mujeres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('accesorios') }}">Accesorios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('ninos') }}">niños</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a class="nav-link text-white" href="{{ route('carrito') }}">Carrito</a>
                <!-- Enlace para Agregar Artículo -->
                <a class="nav-link text-white" href="/agregar_articulo">Agregar Artículo</a>
                
                <!-- Menú Desplegable de Usuario -->

                <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">

                    @if (Route::has('login'))
                    
                        @auth
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
            
                                <div class="dropdown-menu dropdown-menu-end text-white" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="/MisArticulos">Mis Artículos</a>
                                    <a class="dropdown-item" href="/ordenes">Ordenes</a>
                                    <a class="dropdown-item" href="/Ganancias">Ganancias</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
            
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-4 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]  dark:hover:text-white/80 dark:focus-visible:ring-white  text-white"
                            >
                                Log in
                            </a>
        
                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]  dark:hover:text-white/80 dark:focus-visible:ring-white text-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    
                @endif
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
