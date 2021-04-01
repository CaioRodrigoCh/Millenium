@extends('portal.master.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>São Lucas</title>
    <style>
        body{
            font-size: 1.2em;
            color: black;
        }
        header{
            padding-top: 20px;
            padding-bottom: 50px;
            background: #006;
            color: #ddd;
            text-align: center;
        }
        header h1{
            color: #ddd;
        }
        .borda{
            margin: 50px;
            background: #eee;
        }
        .corpo{
            display: flex;
            flex-wrap: wrap;
        }
        .curso{
            width: 800px;
            margin: 50px auto 0px auto;
        }
        img{
            max-width: 100%;
            display: block;
        }
        h1{
            text-align: center;
            color: #006;
        }
        p{
            text-align: justify;
        }
    </style>
</head>
<body>
<main>
<!-- 
<section class="py-5 text-center container" id="topo">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">São Lucas</h1>
      <p class="lead text-muted">Conhecimento que marca.</p>
      <p>
        <a href="https://www.saolucas.edu.br" class="btn btn-primary my-2">Site Principal</a>
      </p>
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

  <h1>Medicina</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Medicina</text></svg>

          <div class="card-body">
            <p class="card-text">O curso de Medicina ministrado na unidade de graduação Porto Velho do São Lucas propõe formar profissionais capacitados intelectual, ética e humanisticamente para realizar a manutenção da saúde da comunidade em geral. O graduado do curso de Medicina do São Lucas deverá ter competência para sugerir a conduta terapêutica apropriada para o tratamento das mais variadas situações clínicas.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  <h1>Direito</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Medicina</text></svg>

          <div class="card-body">
            <p class="card-text">No decorrer de cinco anos de curso, são estudadas as normas e leis do país, de forma que seja mantida uma organização entre a sociedade, as empresas e o poder público. Contando com profissionais qualificados, o Centro Universitário São Lucas oferece toda a estrutura necessária para a melhor compreensão dos alunos sobre a profissão. </p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  <h1>Enfermagem</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Medicina</text></svg>

          <div class="card-body">
            <p class="card-text">O Curso de Enfermagem do Centro Universitário São Lucas forma profissionais com habilidades, competências, atitudes e comportamentos crítico, reflexivo e criativo, capazes de atuar com competência em todos os níveis de complexidade da assistência ao ser humano. O Curso está estruturado em 5 grandes eixos que proporcionarão ao acadêmico disciplinas que contemplem as Ciências Biológicas e Sociais, Fundamentos de enfermagem, Assistência de enfermagem, Administração de enfermagem e Ensino de enfermagem.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  <h1>Engenharia Civil</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Medicina</text></svg>

          <div class="card-body">
            <p class="card-text">Com um total de 5 anos de curso, são estudadas muitas matérias técnicas, como geometria descritiva e mecânica dos solos. A grade curricular do curso de engenharia civil é muito focada na área de exatas. No decorrer da grade são apresentadas matérias como hidráulica, terraplanagem, instalações elétricas prediais, drenagem urbana e saneamento ambiental.</p>
            <div class="d-flex justify-content-between align-items-center">
            </div>
          </div>
        </div>
      </div>
    </div> 
</div> -->
    <header>
        <h1>São Lucas</h1>
        <h5>Conhecimento que marca.</h5>
    </header>

    <h1>Cursos</h1>

    <div class="borda">
    
        <div class="corpo">
            <div class="curso">
                <h1>Direito</h1>
                <img src="../images/curso_direito.jpg" alt="">
                <p>No decorrer de cinco anos de curso, são estudadas as normas e leis do país, de forma que seja mantida uma organização entre a sociedade, as empresas e o poder público. Contando com profissionais qualificados, o Centro Universitário São Lucas oferece toda a estrutura necessária para a melhor compreensão dos alunos sobre a profissão. </p>
            </div>
            <div class="curso">
                <h1>Medicina</h1>
                <img src="../images/curso-medicina.jpg" alt="">
                <p>O curso de Medicina ministrado na unidade de graduação Porto Velho do São Lucas propõe formar profissionais capacitados intelectual, ética e humanisticamente para realizar a manutenção da saúde da comunidade em geral. O graduado do curso de Medicina do São Lucas deverá ter competência para sugerir a conduta terapêutica apropriada para o tratamento das mais variadas situações clínicas.</p>
            </div>
            <div class="curso">
                <h1>Enfermagem</h1>
                <img src="../images/curso-enf.jpg" alt="">
                <p>O curso de Enfermagem do Centro Universitário São Lucas forma profissionais com habilidades, competências, atitudes e comportamentos crítico, reflexivo e criativo, capazes de atuar com competência em todos os níveis de complexidade da assistência ao ser humano. O Curso está estruturado em 5 grandes eixos que proporcionarão ao acadêmico disciplinas que contemplem as Ciências Biológicas e Sociais, Fundamentos de enfermagem, Assistência de enfermagem, Administração de enfermagem e Ensino de enfermagem.</p>
            </div>
            <div class="curso">
                <h1>Engenharia Civil</h1>
                <img src="../images/curso-engenharia.jpg" alt="">
                <p>Com um total de 5 anos de curso, são estudadas muitas matérias técnicas, como geometria descritiva e mecânica dos solos. A grade curricular do curso de engenharia civil é muito focada na área de exatas. No decorrer da grade são apresentadas matérias como hidráulica, terraplanagem, instalações elétricas prediais, drenagem urbana e saneamento ambiental.</p>
            </div>
            <div class="curso">
                <h1>Arquitetura</h1>
                <img src="../images/curso-arq.jpg" alt="">
                <p>A faculdade de arquitetura abrange muitos conteúdos diferentes. Em geral, esse é um curso que possui 10 semestres de duração, ou seja, cinco anos. Dessa forma, é possível absorver todos os conteúdos teóricos e práticos que a faculdade oferece. Na Faculdade São Lucas, é possível desenvolver ainda melhor suas habilidades com desenho e com as maquetes que levam aos projetos em tamanho real.</p>
            </div>
            <div class="curso">
                <h1>Administração</h1>
                <img src="../images/curso-admin.jpg" alt="">
                <p>O curso de administração é um dos mais procurados pelos jovens que estão iniciando o curso superior. Contendo matérias como economia, português e liderança, o curso forma administradores competentes e capazes de realizar as atividades naturalmente designadas para administradores.</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection