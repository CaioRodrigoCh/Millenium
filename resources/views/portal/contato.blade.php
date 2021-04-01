<!-- Header e Footer -->
@extends('portal.master.layout') <!-- rendenizaçãio do layout na pasta master -->
<!-- FIM -->

<!-- Rendenização do conteúdo pela abertura do yield -->
@section('content')
<div class='row'>
    <div class='container py-5'>
        <div class='row'>
        <h1>Contate-nos!</h1>
        </div>

        <div class='row'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Olá, Estamos sempre dispostos a lhe ajudar!</h1>
                    <p class="lead">Entre em contato e tiraremos todas as suas dúvidas.</p>
                </div>
            </div>
        </div>

        <div class='row'>
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Seu email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Dúvida</label>
                <input style="height: 100px;" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite aqui sua dúvida!">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

@endsection