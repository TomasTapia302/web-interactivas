<nav class="navbar navbar-expand-lg bg-primary text-white">
    <div class="container-fluid bg-primary text-white">
      <a class="navbar-brand text-white" href="welcome">store</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container text-end bg-primary text-white">
        <div class="col-5"> </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                        <div class="col">
                            <img src="https://cdn-icons-png.flaticon.com/128/15598/15598573.png" width="30" class="my-4" alt="">
                        </div>
                        <div class="col" ></div>
       
        </div>
    </div>
  </nav>
