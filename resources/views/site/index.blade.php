@extends('layouts.site')

@section('title', 'Welcome')

@section('content')

<header class="p-5">
  <div class="container bg-banner rounded-0">
      <div class="row p-2 pb-0 pe-lg-0 align-items-center shadow-lg rounded-0">
        <div class="col-lg-7 p-3 ps-lg-5 p-lg-4 pt-lg-4 rounded-0">
          <h3 class="lh-1 outfit-font fw-500 text-light">PACOTE</h3>
          <h1 class="display-4 lh-1 outfit-font fw-500 text-light">Programador do Futuro</h1>
          <p class="lead text-light py-3">Curso Starter completo para quem quer começar a programar, incluindo <span class="fw-bold text-white">Lógica de Programação</span>, <span class="fw-bold text-white">Linguagem C</span> e <span class="fw-bold text-white">Programação Estruturada</span>.</p>
          <h3 class="outfit-font fw-500 text-light mb-0">APROVEITE AINDA HOJE!</h3>
          <h3 class="outfit-font fw-500 text-warning mt-0">PROMOÇÃO RELAMPAGO!</h3>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 pt-lg-4">
            <a href="{{route('site-course', 'teste')}}" type="button" class="btn bg-green btn-banner btn-lg px-4 me-md-2 fw-bolder outfit-font">COMPRAR AGORA</a>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg rounded-0">
            <img class="rounded-lg-3" src="{{asset('img/portugol_exemplo.png')}}" alt="" width="720">
        </div>
      </div>
  </div>
</header>

<section class="container p-0">
  <h2 class="outfit-font fw-500 title-success py-3 mb-5 ps-3">MAIS PROCURADOS</h2>
  <div class="row bg-transparent d-flex justify-content-center multiple-items p-3">
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_poo.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          Programação Orientada a Objetos
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_laravel_front-end.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          Laravel para Front-ends
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_logic.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          Lógica de Programação
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_prog_est.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          Programação Estruturada
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_php_basic.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          PHP Basico
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_html_css_bootstrap.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          HTML, CSS e Bootstrap
        </a>  
      </div>
    </div>
    <div class="card bg-transparent border-0 rounded-0">
        <img src="{{asset('img/array_course_angular_basic.png')}}" class="card-img-top" alt="..." width="50px">
        <div class="card-body rounded-0 p-0 bg-transparent">
        <a href="#" class="nav-link h5 text-dark ms-0 ps-0">  
          Angular Basico
        </a>  
      </div>
    </div>
  </div>
</section>

<section class="container p-0 pb-5" id="content">
  <h2 class="outfit-font fw-500 title-light py-3 mb-5 ps-3">PROCURE POR CATEGORIA</h2>

  <div class="row p-0">
    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_front-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_back-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_front-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_back-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_front-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-12 card bg-transparent border-0 rounded-0">
      <img src="{{asset('img/array_cat_back-end.png')}}" class="card-img-top" id="card-visible">
      <a href="#" class="text-center text-dark fs-4 outfit-font text-uppercase text-decoration-none py-3 title-light" id="title-visible">teste</a>
    </div>
  </div>
</section>
@endsection



@section('scripts')
<script type="text/javascript">
  $(document).on('ready', function() {
    $('.multiple-items').slick({
      infinite: true,
      autoplay: true,
      focus: false,
      focused: false,
      focusOnChange: false,
      focusOnSelect: false,
      accessibility: false,
      autoplaySpeed: 2500,
      arrowMode: true,
      arrows: true,
      dots: false,
      slidesToShow: 5,
      slidesToScroll: 3
    });
  });
</script>
@endsection
