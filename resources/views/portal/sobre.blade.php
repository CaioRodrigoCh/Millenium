@extends('portal.master.layout')

@section('content')

<style>
    #corpo-sobre {
        padding-top: 250px;
        display: block;
        margin: 0 auto;
        max-width: 900px;
        text-align: justify;
        margin-bottom: 100px;
    }
    div.conteudo {
        background-color: rgb(228, 228, 228);
        padding: 40px;
    }
    #corpo-sobre h1 {
        margin-bottom: 40px;
        border-bottom: 5px solid #333;
        width: inherit;
    }
    #nome-grupo {
        display: block;
        text-align: right;
    }
</style>
<div id="corpo-sobre">

    <div class="conteudo">
        <h1>Sobre nós</h1>
        <p>Somos o grupo 4 do projeto de extensão da faculdade Sapiens, com os seguintes integrantes:
            mila Silva de Jesus - Sistemas de Informação (Membro),
            Anethe Cardoso Shockness - Engenharia da Computação (Membro),
            Caio Rodrigo - Sistemas de Informação (Membro),
            Erick Lima - Engenharia da Computação (Membro),
            Jadson Vasconcelos - Engenharia da Computação (Membro),
            Lenivaldo José da Silva - Engenharia da Computação (Membro),
            Lívia Maria - Sistemas de Informação (Vice-Líder),
            Lohan Rebouças - Sistemas de Informação (Líder),
            Sandro Nascimento - Jogos Digitais (Membro).
            <br> Com o advento o persistência da pandemia decidimos criar um projeto que consiste
            em um Guia Universitário online. Alunos de Porto Velho poderão acessar e ter informações
            sobre as Instituições presentes no site. Nosso intuito é evitar deslocamento desnecessário
            além de levar informações relevantes e sólidas de forma ampla e clara para todos os interessados
            em ingressar no mundo acadêmico.
            <br> Acreditamos que concedendo informação ampla, remota, imediata e centralizada, contribuimos
            com as medidas de segurança contra a COVID-19 além de auxiliar futuros acadêmicos na escolha
            de sua futura Universidade.
            Parte dos integrantes do projeto não tem conhecimentos de programação, design, desenvolvimento de projetos,
            ou qualquer experiência na área de TI. Dedicamos muito esforço e tempo para aprender a construir cada uma das páginas
            do site e entregá-lo o mais funcional e apresentável possível.
            <br><br>
            <span id="nome-grupo">Grupo 4 - Extensão Sapiens</span>
        </p>

    </div>

</div>
@endsection

