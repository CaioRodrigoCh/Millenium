
<!-- Header e Footer -->
@extends('portal.master.layout') <!-- rendenizaçãio do layout na pasta master -->
<!-- FIM -->

<!-- Rendenização do conteúdo pela abertura do yield -->
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ URL::to('/') }}/images/faculdade.jpg"/>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Bem vindo à Faculdade Millenium</h1>

            <!-- PHP sintaxe -->
            @if(date('H') >= 0 && date('H') <= 12)
            <p> Bom dia!</p>
            @elseif (date('H') >= 13 && date('H') <= 18)
            <p> Boa Tarde teste 123!</p>
            @else
            <p> Boa Noite!</p>
            @endif
            <!-- fim -->

            <p>Venha conhecer nossa faculdade!</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('portal.contato') }}" role="button">Contate-nos.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ URL::to('/') }}/images/banner.jpg"/>
        <div class="container">
          <div class="carousel-caption">
            <h1>Os melhores cursos do Estado</h1>
            <p>A melhor faculdade de Tecnologia!</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('portal.cursos') }}" role="button">Saiba Mais</a></p>
          </div>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Voltar</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Avançar</span>
    </a>
</div>


  <!-- Mensagens de marketing-->
    <div class="d-block mx-auto">
        <div id="formata">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-5">Olá, Estamos sempre dispostos a lhe ajudar!</h1>
                    <img class="rounded-circle" src="{{ URL::to('/') }}/images/satisfacao1.png" alt="Generic placeholder image" width="140" height="140">
                    <p class="lead">Conte com nossa ferramente de feedback.</p>
                    <a class="btn btn-secondary" href="{{ route('portal.contato') }}" role="button">Clique aqui »</a>
                </div>
            </div>
            </div>
    </div><!-- /.row -->
@endsection
