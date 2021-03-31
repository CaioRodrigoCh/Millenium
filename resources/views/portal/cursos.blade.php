<!-- Header e Footer -->
@extends('portal.master.layout') <!-- rendenizaçãio do layout na pasta master -->
<!-- FIM -->

<!-- Rendenização do conteúdo pela abertura do yield -->
@section('content')

<div class='container'>
    <h1> Cursos</h1>
</div>

<div class='container'>
    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Sistemas de Informação</h2>
        <p class="lead">Curso de Sistemas de Informação!</p>
    </div>
    <div class="col-md-5">
        <img src="{{ URL::to('/') }}/images/sistemas.jpg"/>
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Administração</h2>
        <p class="lead">Curso de Administração!</p>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="{{ URL::to('/') }}/images/admin.png"/>
    </div>
    </div>
</div>
@endsection