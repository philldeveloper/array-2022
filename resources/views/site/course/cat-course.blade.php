@extends('layouts.site')

@section('title', 'Course')

@section('content')

<section class="p-5 bg-light">
  <div class="container d-flex justify-content-between align-items-center flex-wrap py-4 px-0">
      <div>
        <small>Cursos / Desenvolvimento</small>
        <h2 class="outfit-font fw-500 text-dark text-wrap" style="word-break: break-all; max-width: 100vh">
          {{ __('Python: Apps para Android, iOS, Linx, Win, e Mac') }}
        </h2>
      </div>

      {{-- <div>
        <a href="#" class="btn-nav btn btn-dark">
          Call to action
          <i class="fa fa-arrow-right"></i>
        </a>
      </div> --}}

      <div>
        <a href="{{route('site-course', 'teste')}}" type="button" class="btn btn-success bg-gradient btn-banner outfit-font">COMPRAR AGORA</a>
      </div>
  </div>
</section>

<div class="container px-0 border-bottom">
  <div class="d-flex justify-content-between align-content-between flex-wrap pt-5">

      <div class="col-md-6">
        <div class="">
          <h2 class="outfit-font fw-500 title-primary py-2 ps-2">O QUE VOCÊ VAI APRENDER</h2>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>

        <div class="pt-2">
          <h2 class="outfit-font fw-500 title-light py-2 ps-2">CONTEÚDO DO CURSO</h2>

          <ul class="mb-3">
            <li>Introducao</li>
            <li>Introducao</li>
            <li>Introducao</li>
            <li>Introducao</li>
          </ul>

          <ul class="">
            <li>Total de Horas: XX</li>
            <li>Total de Aulas: XX</li>
          </ul>
        </div>

        <div class="pt-2">
          <h2 class="outfit-font fw-500 title-light py-2 ps-2">REQUISITOS</h2>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>

        <div class="py-2">
          <h2 class="outfit-font fw-500 title-light py-2 ps-2">ADICIONAIS</h2>
          <p>Este curso pode conter <span class="fw-bold">recursos gamificados</span>, o que inclui referencia a jogos, filmes e outros elementos da cultura geek.</p>
        </div>
      </div>

      <div class="col-md-3">
        <!--card-->
        <h2 class="outfit-font fw-500 title-light py-2 ps-2">SOBRE O AUTOR</h2>
        <div class="card">
          <div class="card-body">
            <p class="lead">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt fuga ipsa blanditiis cupiditate consequatur sapiente ipsum quibusdam atque repellendus placeat obcaecati animi unde beatae et impedit, saepe, quo enim aliquid!
            </p>
          </div>
        </div>
        <!-- end of card-->
      </div>

  </div>
</div>

<section class="container py-5">
  <h2 class="outfit-font fw-500 py-3">CONFIRA OUTROS CURSOS</h2>
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