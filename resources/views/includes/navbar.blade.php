<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" ">
    <a class="navbar-brand" href="/">
      <h5 class="text-danger">Laravel Foot</h5>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="custom-control custom-switch mr-5">
       
          <input type="checkbox" class="custom-control-input" id="darkSwitch">
      
          <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
       
        </div>
        
      <ul class="navbar-nav mr-auto">
        @guest
        <li class="nav-item active">
          <a class="nav-link text-danger" href="/">Accueil</a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link text-danger" href="/posts">Blog</a>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link text-danger" href="/">Accueil</a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link text-danger" href="/home">Dashboard</a>
        </li> 
        <li class="nav-item active">
          <a class="nav-link text-danger" href="/posts">Blog</a>
        </li>
        @endguest       
      </ul>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link text-danger" href="{{ route('login') }}">{{ __('Connexion') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link text-danger" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item ">
                  <a class="nav-link text-danger " href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      {{ Auth::user()->name }} {{ __('Déconnexion') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                  
              </li>
          @endguest
      </ul>
    </div>
  </nav>