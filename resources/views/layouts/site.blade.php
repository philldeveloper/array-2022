<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/site.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital@1&family=Outfit:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

</head>
<body class="bg-white">
    <div id="app">     <!-- background: linear-gradient(to bottom, #ffffff, #ffffff82); -->
        <div class="container-fluid p-0">
            <header class="py-3 border-bottom">
              <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
                <a href="/" class="navbar-brand d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none fw-bold outfit-font">
                  ARRAY
                </a>
          
                <ul class="nav col-12 transparent col-md-auto mb-2 justify-content-center mb-md-0">
                  <li class="d-flex">
                    <a href="#" class="nav-link pe-0 text-dark" onclick="setDarkTheme()"><i class="fa fa-moon"></i></a>
                    <a href="#" class="nav-link text-warning" onclick="setLightTheme()"><i class="fa fa-sun"></i></a>
                  </li>
                  <li><a href="#" class="nav-link px-2 link-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Categorias</a></li>
                  <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                  <li><a href="#" type="button" class="nav-link px-2 link-dark">Sobre Nós</a></li>
                </ul>
          
                <div class="col-md-3 text-end">
                    @guest
                        @if (Route::has('login'))
                        <a type="button" class="btn btn-nav btn-outline-dark me-2"" href="{{ route('login') }}">{{ __('Fazer Login') }}</a>
                        @endif
                        @if (Route::has('register'))
                        <a type="button" class="btn btn-nav bg-green text-dark fw-bold me-2"" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                        @endif
                    @else
                    <a class="btn btn-dark" type="submit" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Sair') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                </div>
              </div>
            </header>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                <div class="offcanvas-header">
                  <a href="/" class="fs-3 text-dark text-decoration-none offcanvas-title fw-bold outfit-font" id="offcanvasWithBackdropLabel">
                    ARRAY
                  </a>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <a href="" class="nav-link text-dark p-0"> Programação Orientada a Objetos</a>
                      </li>
                      <li class="list-group-item">
                        <a href="" class="nav-link text-dark p-0"> Programação Estruturada</a>
                      </li>
                      <li class="list-group-item">
                        <a href="" class="nav-link text-dark p-0"> Estrutura de Dados</a>
                      </li>
                      <li class="list-group-item">
                        <a href="" class="nav-link text-dark p-0"> Front End</a>
                      </li>
                      <li class="list-group-item">
                        <a href="" class="nav-link text-dark p-0"> Back End</a>
                      </li>
                    </ul>
                  </div>
                  <div class="mb-5" style="position: absolute; bottom: 0;width: 90% !important;display: flex;flex-direction: column">
                    <label for="" class="lead fs-4 pb-2">Pesquise um Curso:</label>
                    <form action="">
                      <input type="search" name="" id="" required="" class="pe-2 form-control border-dark bg-transparent" placeholder="type something">

                      <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 pt-lg-3">
                        <button type="button" class="btn rounded btn-dark btn-banner btn-lg outfit-font" style="width: 100% !important;">Pesquisar</button>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>   

        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Eighth navbar example">
            <div class="container">
              <a class="navbar-brand" href="#">Container</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="form-inline">
                    <input class="col form-control mr-sm-2" style="width: 400px" type="text" placeholder="Começe procurando por aqui" aria-label="Começe procurando por aqui">
                </form>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
            <section class="bg-banner-podcast p-4">
              <div class="row p-2 justify-content-center align-items-center text-center">
                <div class="col-lg-6 p-3 rounded-0">
                  <h3 class="lh-1 outfit-font fw-500 text-light">QUER APRENDER MAIS?</h3>
                  <h1 class="display-4 lh-1 outfit-font fw-500 text-light">Ouça nosso podcast.</h1>
                  <p class="lead text-light py-3">Curso Starter completo para quem quer começar a programar, incluindo <span class="fw-bold text-white">Lógica de Programação</span>, <span class="fw-bold text-white">Linguagem C</span> e <span class="fw-bold text-white">Programação Estruturada</span>.</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{route('site-course', 'teste')}}" type="button" class="btn bg-green btn-banner btn-lg fw-bolder outfit-font"><i class="fa-brands fa-spotify me-2"></i> Ir para o Spotify</a>
                  </div>
                </div>
              </div>
            </section>
        </main>
        
        <footer id="footer" class="footer">
          <div class="footer-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-6 footer-links">
                          <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 footer-links">
                          <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                          </ul>
                      </div>
                      <div class="col-lg-3 col-md-6 footer-contact">
                          <p><strong>Phone:</strong> +1 5589 55488 55<br> <strong>Email:</strong> info@example.com<br> </p>
                      </div>
                      <div class="col-lg-3 col-md-6 footer-info">
                          <h3 class="outfit-font fs-2">Array</h3>
                          <p>All Rights Reserved. 2022</p>
                          <div class="social-links mt-3"> <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a> <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a> <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a> <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a> </div>
                      </div>
                  </div>
              </div>
          </div>
        </footer> 
    
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>	
    
        @yield('scripts')
    </div>
</body>
</html>
