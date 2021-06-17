<!-- Header e Footer -->
@extends('portal.master.layout') <!-- rendenizaçãio do layout na pasta master -->
<!-- FIM -->

<!-- Rendenização do conteúdo pela abertura do yield -->
@section('content')
<div class='row'>
    
    <div class='container py-2'>
        <div class='row'>        
        <h1>Contate-nos!</h1>
        </div>

        <div class='row'>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <figure class="text-center">
                    <h1 class="display-6"> Bem vindo ao Guia do Universitário PVH, em que podemos te ajudar?
                    <h1 class="lead"> Contate-nos e tiraremos todas as suas dúvidas!</h1>
                </div>
            </div>
        </div>      
        <div class='row'>        
        
            <form>            
                
                <div class="form-group"> 
                                            
                <label for="exampleInputEmail1">Seu email</label>                 
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email/telefone, com ninguém.</small>
                </div>                
                                
                <div class="form-group"> 
                <label for="exampleInputPassword1">Seu comentário</label>                
                <input style="height: 60px;" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite aqui sua dúvida!">
                <!-- <textarea style="height: 60px;" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite aqui sua dúvida!"></textarea> -->
                </div>                

                <button type="submit" class="btn btn-primary">Enviar</button>                

            </form>
        </div>
    </div>

@endsection