<!-- Header e Footer -->
@extends('portal.master.layout') <!-- rendenizaçãio do layout na pasta master -->
<!-- FIM -->

<!-- Rendenização do conteúdo pela abertura do yield -->
@section('content')


<div class="container-fluid">
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light" style="background-image: url('/images/sapiens-historia.jpg');">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal" style="color: white">Faculdade Sapiens</h1>
        <p class="lead fw-normal">Excepcionalidade& Profissionalismo& Estrutura& Qualidade.</p>
        <a class="btn btn-outline-secondary" style="color: aliceblue" href="https://faculdadesapiens.edu.br/" target="blank">Clique aqui!</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
  </main>

  <div class="container">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">História</h2>
        <p class="lead">A Faculdade Sapiens iniciou suas atividades em Porto Velho em maio de 2001 – tendo como mantenedora a Einstein Instituição de Ensino Ltda, como Faculdade de Porto Velho – FIP, autorizada pela Portaria Ministerial nº 991, de 17/05/2001 e publicada no Diário Oficial da União em 22 de maio de 2001.
          De lá para cá, muita coisa mudou, a faculdade cresceu, evoluiu e expandiu. Hoje são 12 cursos em plena atividade, nas áreas de Negócios, Engenharia, Pedagogia e Tecnologia, aliando o que há de mais moderno em ferramentas de ensino e professores titulados e atuantes no mercado de trabalho, fazendo com que a teoria e a prática caminhem lado a lado na formação de profissionais de sucesso.</p>
      </div>
    <div class="col-md-5">
      <br>
      <img src="{{ URL::to('/') }}/images/sapiens2jpg.jpg" height="350px" width="580px"/>
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Cursos</h2>
        
        <main class="container">
          <div class="bg-light p-5 rounded">
            <img src="{{ URL::to('/') }}/images/curso-adm.jpg" />
            <h1>Administração</h1>
            <p class="lead">É um curso que possibilita ao candidato atuar em qualquer segmento dentro de uma empresa pública ou privada.</p>
            <a class="btn btn-lg btn-primary" target="blank" href="https://faculdadesapiens.edu.br/cursos/administracao/" role="button">Acesse por aqui! &raquo;</a>
          </div>
        </main>
        <br>
        <main class="container">
          <div class="bg-light p-5 rounded">
            <h1>Comércio Exterior</h1>
            {{-- <img src="{{ URL::to('/') }}/images/curso-adm.jpg" height="100px" width="100px"/> --}}
            <p class="lead">Seja o profissional que vai de encontro com as novas tendências de mercado, onde os países estão organizadas em blocos econômicos para facilitar e aumentar o comércio internacional, ampliando o espaço e importância do profissional de Comércio Exterior.</p>
            <a class="btn btn-lg btn-primary" target="blank" href="https://faculdadesapiens.edu.br/cursos/comercio-exterior/" role="button">Acesse por aqui! &raquo;</a>
          </div>
        </main>
        <br>
        <main class="container">
          <div class="bg-light p-5 rounded">
            <h1>Direito</h1>
            {{-- <img src="{{ URL::to('/') }}/images/curso-adm.jpg" height="100px" width="100px"/> --}}
            <p class="lead">O curso de Direito da Faculdade Sapiens é diferente de todos os outros disponíveis na cidade. É integral e, além de formar o estudante na carreira jurídica, também promove o empreendedorismo através de técnicas de gestão, inovação e criatividade.</p>
            <a class="btn btn-lg btn-primary" target="blank" href="https://faculdadesapiens.edu.br/cursos/direito/" role="button">Acesse por aqui! &raquo;</a>
          </div>
        </main>
        <br>
        <main class="container">
          <div class="bg-light p-5 rounded">
            <h1>Sistemas de Informação</h1>
            {{-- <img src="{{ URL::to('/') }}/images/curso-adm.jpg" height="100px" width="100px"/> --}}
            <p class="lead">O estudante que deseja ingressar em Sistemas da Informação deve possuir perfil generalista, podendo se especializar em uma das áreas ou funções da Tecnologia da Informação. Sua futura profissão exige grande gosto pelo estudo e leitura, pois as atualizações constantes são necessárias. Além disso, este profissional deve ter grande gosto por desafios, a fim resolver os mais variados tipos de problemas, além de propor novas ferramentas e soluções tecnológicas.</p>
            <a class="btn btn-lg btn-primary" target="blank" href="https://faculdadesapiens.edu.br/cursos/sistemas-de-informacao/" role="button">Acesse por aqui! &raquo;</a>
          </div>
        </main>
    </div>
    {{-- <div class="col-md-5 order-md-1">
        <img src="{{ URL::to('/') }}/images/sapiens3.jpg"  height="250px" width="300px"/>
    </div> --}}
    </div>
  </div>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</div>

@endsection