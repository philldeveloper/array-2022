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

<div class="container pb-5 px-0">
  <div class="d-flex justify-content-between align-content-between flex-wrap py-5">

      <div class="col-md-6">
        <div class="">
          <h2 class="title-success py-2 px-2 text-wrap flex-wrap">O que você vai aprender:</h2>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>

        <div class="pt-2">
          <h2 class="title-primary py-2 px-2 text-wrap flex-wrap">Conteúdo do Curso</h2>

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
          <h2 class="title-light py-2 px-2 text-wrap flex-wrap">Requisitos</h2>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>

        <div class="py-2">
          <h2 class="title-light py-2 px-2 text-wrap flex-wrap">Adicionais</h2>
          <p>Este curso pode conter <span class="fw-bold">recursos gamificados</span>, o que inclui referencia a jogos, filmes e outros elementos da cultura geek.</p>
        </div>
      </div>

      <div class="col-md-3">
        <!--card-->
        <h2 class="title-light py-2 px-2 text-wrap flex-wrap">Sobre o Autor</h2>
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
@endsection