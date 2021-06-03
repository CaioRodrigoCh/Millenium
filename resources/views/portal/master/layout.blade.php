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

        <link rel="stylesheet" href="/css/global.css">

        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="shortcut icon" href="/icon_sistema.ico" />
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Guia do Universitário</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.contate-nos' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.contate-nos') }}">contate-nos</a></li>
                        <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.home' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.home') }}">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.faro' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.faro') }}">FARO</a></li>
                        <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.sapiens' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.sapiens') }}">SAPIENS</a></li>
                        <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.saolucas' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.saolucas') }}">São Lucas</a></li>
                        <li class="nav-item mx-0 mx-lg-1 {{ (Route::current()->getName() === 'portal.uniron' ? 'active' : '') }}"><a class="nav-link" href="{{ route('portal.uniron') }}">Uniron</a></li>
                        
                    </ul>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                FACULDADES
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main role="main">

        @yield('content')  <!-- Abertura para outros layouts de conteúdo -->

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Endereço</h4>
                        <p class="lead mb-0">
                            Rua do Fulano, 1234
                            <br />
                            Porto Velho, RO
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes sociais</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Dúvidas</h4>
                        <p class="lead mb-0">
                            Entre em contato conosco via email:
                            <a class="text-decoration-none" href="#!">grupouniversitario@email.com.br</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Grupo Guia do Universitário &copy; Projeto desenvolvido para disciplina Extensão de Tecnologia | Faculdade SAPIENS 2021 </small></div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>

</body>
</html>


