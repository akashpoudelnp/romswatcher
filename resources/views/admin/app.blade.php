



<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-dark sticky-top  flex-md-nowrap shadow" style="background: #134d80;">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">   {{ config('app.name', 'Laravel') }} | Admin Panel</a>
           
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               
                            <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item ">
                        
                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} ->   {{ Auth::user()->name }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </li>
                @endguest
            </ul>
          </nav>
          
          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/addphone', []) }}">
                        <span class="fa fa-plus-circle"></span>
                        Add Phones
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/addrom', []) }}">
                        <span class="fa fa-plus-circle"></span>
                        Add Roms
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/addkernel', []) }}">
                        <span class="fa fa-plus-circle"></span>
                        Add Kernels
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <span class="fa fa-plus-circle"></span>
                        Add More-
                      </a>
                    </li>
                    
                  </ul>
          
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Edit and View Saved</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                      <span data-feather="plus-circle"></span>
                    </a>
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/viewrom', []) }}">
                        <span data-feather="file-text"></span>
                       Roms
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/viewphone', []) }}">
                        <span data-feather="file-text"></span>
                       Phones
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/viewkernel', []) }}">
                        <span data-feather="file-text"></span>
                       Kernels
                      </a>
                    </li>
                    
                  </ul>
                  <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Sliders</span>
                   
                  </h6>
                  <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('admin/sliders/featured', []) }}">
                        <span data-feather="file-text"></span>
                       Featured
                      </a>
                    </li>
                   
                    
                  </ul>
                </div>
              </nav>
          
              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                  @yield('content')
              </main>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
            
              </body>
      </html>