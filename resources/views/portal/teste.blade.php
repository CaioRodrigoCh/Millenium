@extends('portal.master.layout')

@section('content')

<div>
    <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex">
                <div class="content-inside">
                    <h1>Faculdade FARO</h1>
                    <p>Transformando sonhos em realidade</p>
                  </div>

                  <div>
                      <img src="https://faro.edu.br/wp-content/uploads/2020/05/capa-site-e1590858445506.png" alt="logo">
                  </div>

                </div>
            </div>
    </header>

    <section class="page-section bg-dark text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">
                  Sobre nós
                </h2>

                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-info-circle"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <p class="lead">
                          Projeto em conjunto criado para facilitar o acesso às informações das melhores faculdades de Porto Velho.
                        </p>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection
