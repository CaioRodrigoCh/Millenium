<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viweport"
        content="width=device-width, user-scalabre=no",initial-sc>
        <meta http-equiv="X-UA-Compatible" content='ie=edge'>
        <title>Guia Universitário</title>
        <!-- Importação Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Importação CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/faro.css') }}">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

        <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
          <a class="navbar-brand" href="{{ route('portal.home') }}">Guia do Universitário</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item {{ (Route::current()->getName() === 'portal.home' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.home') }}">Página Principal</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'portal.faro' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.faro') }}">FARO</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'portal.sapiens' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.sapiens') }}">Sapiens</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'portal.saolucas' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.saolucas') }}">São Lucas</a></li>
              <li class="nav-item {{ (Route::current()->getName() === 'portal.uniron' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.uniron') }}">Uniron</a></li>            
              <!-- <li class="nav-item {{ (Route::current()->getName() === 'portal.cursos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.cursos') }}">Cursos</a></li> -->
              <!-- <li class="nav-item {{ (Route::current()->getName() === 'portal.contato' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.contato') }}">Contato</a></li> -->
            </ul>
          </div>
        </nav>
      </header>

      <main role="main">

        @yield('content')  <!-- Abertura para outros layouts de conteúdo -->


        <!-- FOOTER -->
        <footer>
          <br>
          <br>
          <hr>
          <p class="float-right"><a href="#">Voltar ao topo</a></p>
          <p> Grupo <strong>Guia do Universitário</strong> &copy;<?= date('Y') ?> &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        </footer>
      </main>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


