@extends('portal.master.layout')

@section('content')



<div>

    <main role="main">

      <div class="content">
        
        <div class="content-inside">
          <h1>Faculdade FARO</h1>
          <p>Transformando sonhos em realidade</p>
        </div>

        <div>
            <img src="https://faro.edu.br/wp-content/uploads/2020/05/capa-site-e1590858445506.png" alt="logo">
        </div>
      </div>

      <div class="album py-5 bg-light">
        <div class="container">

        <h1 class="titulocursos">Cursos</h1>

          <div class="row">

                <!-- Curso 1 -->
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://faro.edu.br/wp-content/uploads/2020/02/FARO-Site-curso-Eng.Florestal-1200x955-1-300x239.jpg" alt="Card image cap">
                    <div class="card-body separation">

                      <div class="description-text">
                      <h2>Engenharia Florestal</h2>
                        <p class="card-text">
                          O curso de Engenharia Florestal da FARO possibilita ao acadêmico conhecer e administrar as 
                          potencialidades e limitações do meio ambiente, além da capacidade de apontar as melhores 
                          alternativas de aproveitamento dos recursos naturais.
                        </p>
                      </div>

                      <div class="description-icons">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSItMTIgMCA0NDggNDQ4LjA0NDU1IiB3aWR0aD0iNDQ4cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNC4wMjM0MzggNDQ4LjAzMTI1Yzg1LjcxNDg0My45MDIzNDQgMTY0LjAxMTcxOC00OC40ODgyODEgMjAwLjExNzE4Ny0xMjYuMjMwNDY5LTIyLjcyMjY1NiA5LjkxNDA2My00Ny4zMzIwMzEgMTQuNzY5NTMxLTcyLjExNzE4NyAxNC4yMzA0NjktOTcuMTU2MjUtLjEwOTM3NS0xNzUuODkwNjI2LTc4Ljg0Mzc1LTE3Ni0xNzYgLjk3MjY1Ni02NS43MTg3NSAzNy4yMzQzNzQtMTI1LjgzMjAzMSA5NC45MTAxNTYtMTU3LjM1MTU2Mi0xNS41NTQ2ODgtMS45ODA0NjktMzEuMjMwNDY5LTIuODY3MTg4LTQ2LjkxMDE1Ni0yLjY0ODQzOC0xMjMuNzE0ODQ0IDAtMjI0LjAwMDAwMDUgMTAwLjI4OTA2Mi0yMjQuMDAwMDAwNSAyMjQgMCAxMjMuNzE0ODQ0IDEwMC4yODUxNTY1IDIyNCAyMjQuMDAwMDAwNSAyMjR6bTAgMCIvPjwvc3ZnPg==" width="30" height="30">
                                <span>Noite</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIC04IDQ0OCA0NDgiIHdpZHRoPSI0NDhwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzUyIDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgNjRjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHMtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOHptMCAwIi8+PHBhdGggZD0ibTk2IDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0zODQgMzEyYzAgMy40MDIzNDQtMi4xNDg0MzggNi40Mjk2ODgtNS4zNTkzNzUgNy41NTA3ODEtLjg1MTU2My4yOTI5NjktMS43NDIxODcuNDQ1MzEzLTIuNjQwNjI1LjQ0OTIxOS0yLjQ0MTQwNiAwLTQuNzQ2MDk0LTEuMTEzMjgxLTYuMjY1NjI1LTMuMDIzNDM4bC0zMy43MzQzNzUtNDIuNDE3OTY4LTMzLjczNDM3NSA0Mi40MDIzNDRjLTIuMTE3MTg3IDIuNjYwMTU2LTUuNjgzNTk0IDMuNjk1MzEyLTguODk0NTMxIDIuNTc4MTI0LTMuMjEwOTM4LTEuMTE3MTg3LTUuMzYzMjgyLTQuMTQwNjI0LTUuMzcxMDk0LTcuNTM5MDYydi0xNjhoLTI4OHYyODhoNDQ4di0yODhoLTY0em0wIDAiLz48cGF0aCBkPSJtMzQyLjI2NTYyNSAyNTYuNzM0Mzc1IDI1LjczNDM3NSAzMi4zNjMyODF2LTE0NS4wOTc2NTZoLTY0djE0NS4wOTc2NTZsMjUuNzM0Mzc1LTMyLjM2MzI4MWMxLjUxOTUzMS0xLjkxMDE1NiAzLjgyNDIxOS0zLjAyMzQzNyA2LjI2NTYyNS0zLjAyMzQzN3M0Ljc0NjA5NCAxLjExMzI4MSA2LjI2NTYyNSAzLjAyMzQzN3ptMCAwIi8+PHBhdGggZD0ibTM3NiA1NmMwIDEzLjI1MzkwNi0xMC43NDYwOTQgMjQtMjQgMjRzLTI0LTEwLjc0NjA5NC0yNC0yNHYtMjRoLTgwdjI0YzAgMTMuMjUzOTA2LTEwLjc0NjA5NCAyNC0yNCAyNHMtMjQtMTAuNzQ2MDk0LTI0LTI0di0yNGgtODB2MjRjMCAxMy4yNTM5MDYtMTAuNzQ2MDk0IDI0LTI0IDI0cy0yNC0xMC43NDYwOTQtMjQtMjR2LTI0aC03MnY5Nmg0NDh2LTk2aC03MnptMCAwIi8+PC9zdmc+" width="30" height="30">
                                <span>10 Semestres</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNjIuNzA3LDMzMi45NjNjLTQuMjE3LDIuMTA5LTkuMTk3LDIuMTA5LTEzLjQxNiwwbC0xNDguMjkyLTc0LjE1bDIwLjQyNSw4My4yNjJjMC44MzUsMy4zNjksMi43OTgsNi4zNDMsNS41ODEsOC40MjMNCgkJCWMzNy45NjksMjguNDc3LDgzLjQ4MSw0Mi43MjksMTI4Ljk5NCw0Mi43MjlzOTEuMDI1LTE0LjI1MywxMjguOTk0LTQyLjcyOWMyLjc4My0yLjA4LDQuNzQ2LTUuMDU0LDUuNTgxLTguNDIzbDIwLjQyNS04My4yNjINCgkJCUwyNjIuNzA3LDMzMi45NjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguODQxLDQwNy40MDFDNDk2LjY3Niw0MTUuOTE3LDQ4MS45NDMsNDIxLDQ2Niw0MjFzLTMwLjY3Ni01LjA4My00Mi44NDEtMTMuNTk5QzQyMS44OTcsNDExLjczNSw0MjEsNDE2LjIyOCw0MjEsNDIxDQoJCQljMCwzMS45MzQsMzIuODg2LDU0LjkzMiwzNi42MzYsNTcuNDUxYzUuMDY5LDMuMzk5LDExLjY2LDMuMzk5LDE2LjcyOSwwQzQ3OC4xMTQsNDc1LjkzMiw1MTEsNDUyLjkzNCw1MTEsNDIxDQoJCQlDNTExLDQxNi4yMjgsNTEwLjEwMyw0MTEuNzM1LDUwOC44NDEsNDA3LjQwMXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ4MSwzMDMuNzYzVjE5MC4yNzJsMjIuNzA5LTEwLjg1NEM1MDguNzkyLDE3Ni44NjksNTEyLDE3MS42ODQsNTEyLDE2NnMtMy4yMDgtMTAuODY5LTguMjkxLTEzLjQxOGwtMjQxLTEyMA0KCQkJYy00LjIxOS0yLjEwOS05LjE5OS0yLjEwOS0xMy40MTgsMGwtMjQxLDEyMEMzLjIwOCwxNTUuMTMxLDAsMTYwLjMxNiwwLDE2NnMzLjIwOCwxMC44NjksOC4yOTEsMTMuNDE4bDI0MSwxMjANCgkJCWM0LjIxOSwyLjEwOSw5LjE5OSwyLjEwOSwxMy40MTgsMEw0NTEsMjA1LjI3MnY5OC40OTFjLTE3LjQyMiw2LjIxMy0zMCwyMi43MDctMzAsNDIuMjM3YzAsMjQuODE0LDIwLjE4Niw0NSw0NSw0NQ0KCQkJYzI0LjgxNCwwLDQ1LTIwLjE4Niw0NS00NUM1MTEsMzI2LjQ3LDQ5OC40MjIsMzA5Ljk3Niw0ODEsMzAzLjc2M3ogTTMzMC4yMzgsMTUwLjIzOEMzMTAuNDE5LDE3MC4wNzIsMjg0LjA1MiwxODEsMjU2LDE4MQ0KCQkJcy01NC40MTktMTAuOTI4LTc0LjIzOC0zMC43NjJjLTUuODU5LTUuODU5LTUuODU5LTE1LjM2NiwwLTIxLjIxMWM1Ljg1OS01Ljg1OSwxNS4zNTItNS44NTksMjEuMjExLDANCgkJCWMyOC4zMywyOC4zMyw3Ny43MjUsMjguMzMsMTA2LjA1NSwwYzUuODU5LTUuODU5LDE1LjM1Mi01Ljg1OSwyMS4yMTEsMEMzMzYuMDk4LDEzNC44NzIsMzM2LjA5OCwxNDQuMzc5LDMzMC4yMzgsMTUwLjIzOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" width="30" height="30">
                                <span>Bacharelado</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- Curso 1 Fim -->
            
                <!-- Curso 2 -->
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://faro.edu.br/wp-content/uploads/2020/02/FARO-Site-curso-Eng.Civil-1200x955-1-300x238.jpg" alt="Card image cap">
                    <div class="card-body separation">

                      <div class="description-text">
                      <h2>Engenharia Civil</h2>
                        <p class="card-text">
                          A graduação em Engenharia Civil da Faro oferece uma formação de excelência, 
                          onde a teoria e a prática complementam-se para desenvolver e aprimorar conhecimentos e competências 
                          baseados nos avanços tecnológicos que envolvem infraestrutura, habitação e transportes, sempre levando 
                          em consideração os valores éticos da Engenharia, atrelados ao desenvolvimento sustentável e de qualidade de 
                          vida da sociedade.
                        </p>
                      </div>

                      <div class="description-icons">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSItMTIgMCA0NDggNDQ4LjA0NDU1IiB3aWR0aD0iNDQ4cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNC4wMjM0MzggNDQ4LjAzMTI1Yzg1LjcxNDg0My45MDIzNDQgMTY0LjAxMTcxOC00OC40ODgyODEgMjAwLjExNzE4Ny0xMjYuMjMwNDY5LTIyLjcyMjY1NiA5LjkxNDA2My00Ny4zMzIwMzEgMTQuNzY5NTMxLTcyLjExNzE4NyAxNC4yMzA0NjktOTcuMTU2MjUtLjEwOTM3NS0xNzUuODkwNjI2LTc4Ljg0Mzc1LTE3Ni0xNzYgLjk3MjY1Ni02NS43MTg3NSAzNy4yMzQzNzQtMTI1LjgzMjAzMSA5NC45MTAxNTYtMTU3LjM1MTU2Mi0xNS41NTQ2ODgtMS45ODA0NjktMzEuMjMwNDY5LTIuODY3MTg4LTQ2LjkxMDE1Ni0yLjY0ODQzOC0xMjMuNzE0ODQ0IDAtMjI0LjAwMDAwMDUgMTAwLjI4OTA2Mi0yMjQuMDAwMDAwNSAyMjQgMCAxMjMuNzE0ODQ0IDEwMC4yODUxNTY1IDIyNCAyMjQuMDAwMDAwNSAyMjR6bTAgMCIvPjwvc3ZnPg==" width="30" height="30">
                                <span>Noite</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIC04IDQ0OCA0NDgiIHdpZHRoPSI0NDhwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzUyIDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgNjRjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHMtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOHptMCAwIi8+PHBhdGggZD0ibTk2IDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0zODQgMzEyYzAgMy40MDIzNDQtMi4xNDg0MzggNi40Mjk2ODgtNS4zNTkzNzUgNy41NTA3ODEtLjg1MTU2My4yOTI5NjktMS43NDIxODcuNDQ1MzEzLTIuNjQwNjI1LjQ0OTIxOS0yLjQ0MTQwNiAwLTQuNzQ2MDk0LTEuMTEzMjgxLTYuMjY1NjI1LTMuMDIzNDM4bC0zMy43MzQzNzUtNDIuNDE3OTY4LTMzLjczNDM3NSA0Mi40MDIzNDRjLTIuMTE3MTg3IDIuNjYwMTU2LTUuNjgzNTk0IDMuNjk1MzEyLTguODk0NTMxIDIuNTc4MTI0LTMuMjEwOTM4LTEuMTE3MTg3LTUuMzYzMjgyLTQuMTQwNjI0LTUuMzcxMDk0LTcuNTM5MDYydi0xNjhoLTI4OHYyODhoNDQ4di0yODhoLTY0em0wIDAiLz48cGF0aCBkPSJtMzQyLjI2NTYyNSAyNTYuNzM0Mzc1IDI1LjczNDM3NSAzMi4zNjMyODF2LTE0NS4wOTc2NTZoLTY0djE0NS4wOTc2NTZsMjUuNzM0Mzc1LTMyLjM2MzI4MWMxLjUxOTUzMS0xLjkxMDE1NiAzLjgyNDIxOS0zLjAyMzQzNyA2LjI2NTYyNS0zLjAyMzQzN3M0Ljc0NjA5NCAxLjExMzI4MSA2LjI2NTYyNSAzLjAyMzQzN3ptMCAwIi8+PHBhdGggZD0ibTM3NiA1NmMwIDEzLjI1MzkwNi0xMC43NDYwOTQgMjQtMjQgMjRzLTI0LTEwLjc0NjA5NC0yNC0yNHYtMjRoLTgwdjI0YzAgMTMuMjUzOTA2LTEwLjc0NjA5NCAyNC0yNCAyNHMtMjQtMTAuNzQ2MDk0LTI0LTI0di0yNGgtODB2MjRjMCAxMy4yNTM5MDYtMTAuNzQ2MDk0IDI0LTI0IDI0cy0yNC0xMC43NDYwOTQtMjQtMjR2LTI0aC03MnY5Nmg0NDh2LTk2aC03MnptMCAwIi8+PC9zdmc+" width="30" height="30">
                                <span>10 Semestres</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNjIuNzA3LDMzMi45NjNjLTQuMjE3LDIuMTA5LTkuMTk3LDIuMTA5LTEzLjQxNiwwbC0xNDguMjkyLTc0LjE1bDIwLjQyNSw4My4yNjJjMC44MzUsMy4zNjksMi43OTgsNi4zNDMsNS41ODEsOC40MjMNCgkJCWMzNy45NjksMjguNDc3LDgzLjQ4MSw0Mi43MjksMTI4Ljk5NCw0Mi43MjlzOTEuMDI1LTE0LjI1MywxMjguOTk0LTQyLjcyOWMyLjc4My0yLjA4LDQuNzQ2LTUuMDU0LDUuNTgxLTguNDIzbDIwLjQyNS04My4yNjINCgkJCUwyNjIuNzA3LDMzMi45NjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguODQxLDQwNy40MDFDNDk2LjY3Niw0MTUuOTE3LDQ4MS45NDMsNDIxLDQ2Niw0MjFzLTMwLjY3Ni01LjA4My00Mi44NDEtMTMuNTk5QzQyMS44OTcsNDExLjczNSw0MjEsNDE2LjIyOCw0MjEsNDIxDQoJCQljMCwzMS45MzQsMzIuODg2LDU0LjkzMiwzNi42MzYsNTcuNDUxYzUuMDY5LDMuMzk5LDExLjY2LDMuMzk5LDE2LjcyOSwwQzQ3OC4xMTQsNDc1LjkzMiw1MTEsNDUyLjkzNCw1MTEsNDIxDQoJCQlDNTExLDQxNi4yMjgsNTEwLjEwMyw0MTEuNzM1LDUwOC44NDEsNDA3LjQwMXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ4MSwzMDMuNzYzVjE5MC4yNzJsMjIuNzA5LTEwLjg1NEM1MDguNzkyLDE3Ni44NjksNTEyLDE3MS42ODQsNTEyLDE2NnMtMy4yMDgtMTAuODY5LTguMjkxLTEzLjQxOGwtMjQxLTEyMA0KCQkJYy00LjIxOS0yLjEwOS05LjE5OS0yLjEwOS0xMy40MTgsMGwtMjQxLDEyMEMzLjIwOCwxNTUuMTMxLDAsMTYwLjMxNiwwLDE2NnMzLjIwOCwxMC44NjksOC4yOTEsMTMuNDE4bDI0MSwxMjANCgkJCWM0LjIxOSwyLjEwOSw5LjE5OSwyLjEwOSwxMy40MTgsMEw0NTEsMjA1LjI3MnY5OC40OTFjLTE3LjQyMiw2LjIxMy0zMCwyMi43MDctMzAsNDIuMjM3YzAsMjQuODE0LDIwLjE4Niw0NSw0NSw0NQ0KCQkJYzI0LjgxNCwwLDQ1LTIwLjE4Niw0NS00NUM1MTEsMzI2LjQ3LDQ5OC40MjIsMzA5Ljk3Niw0ODEsMzAzLjc2M3ogTTMzMC4yMzgsMTUwLjIzOEMzMTAuNDE5LDE3MC4wNzIsMjg0LjA1MiwxODEsMjU2LDE4MQ0KCQkJcy01NC40MTktMTAuOTI4LTc0LjIzOC0zMC43NjJjLTUuODU5LTUuODU5LTUuODU5LTE1LjM2NiwwLTIxLjIxMWM1Ljg1OS01Ljg1OSwxNS4zNTItNS44NTksMjEuMjExLDANCgkJCWMyOC4zMywyOC4zMyw3Ny43MjUsMjguMzMsMTA2LjA1NSwwYzUuODU5LTUuODU5LDE1LjM1Mi01Ljg1OSwyMS4yMTEsMEMzMzYuMDk4LDEzNC44NzIsMzM2LjA5OCwxNDQuMzc5LDMzMC4yMzgsMTUwLjIzOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" width="30" height="30">
                                <span>Bacharelado</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Curso 2 Fim -->
            
                <!-- Curso 3 -->
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://faro.edu.br/wp-content/uploads/2020/02/FARO-Site-curso-Direito-1200x955-1-300x239.jpg" alt="Card image cap">
                    <div class="card-body separation">

                      <div class="description-text">
                      <h2>Direito</h2>
                        <p class="card-text">
                          O curso de Direito da FARO está baseado na melhor tradição jurídica do Brasil e possui uma formação 
                          interdisciplinar: economia, política, filosofia, sociologia e todas as ciências sociais que contribuem 
                          para uma visão ampla e profunda acerca da compreensão das leis e dos fenômenos jurídicos inseridos na 
                          história e no desenvolvimento da civilização. Ao mesmo tempo, proporciona uma visão humanística e sensível 
                          da realidade e dos problemas sociais que requerem a promoção e distribuição da Justiça.
                        </p>
                      </div>

                      <div class="description-icons">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSItMTIgMCA0NDggNDQ4LjA0NDU1IiB3aWR0aD0iNDQ4cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNC4wMjM0MzggNDQ4LjAzMTI1Yzg1LjcxNDg0My45MDIzNDQgMTY0LjAxMTcxOC00OC40ODgyODEgMjAwLjExNzE4Ny0xMjYuMjMwNDY5LTIyLjcyMjY1NiA5LjkxNDA2My00Ny4zMzIwMzEgMTQuNzY5NTMxLTcyLjExNzE4NyAxNC4yMzA0NjktOTcuMTU2MjUtLjEwOTM3NS0xNzUuODkwNjI2LTc4Ljg0Mzc1LTE3Ni0xNzYgLjk3MjY1Ni02NS43MTg3NSAzNy4yMzQzNzQtMTI1LjgzMjAzMSA5NC45MTAxNTYtMTU3LjM1MTU2Mi0xNS41NTQ2ODgtMS45ODA0NjktMzEuMjMwNDY5LTIuODY3MTg4LTQ2LjkxMDE1Ni0yLjY0ODQzOC0xMjMuNzE0ODQ0IDAtMjI0LjAwMDAwMDUgMTAwLjI4OTA2Mi0yMjQuMDAwMDAwNSAyMjQgMCAxMjMuNzE0ODQ0IDEwMC4yODUxNTY1IDIyNCAyMjQuMDAwMDAwNSAyMjR6bTAgMCIvPjwvc3ZnPg==" width="30" height="30">
                                <span>Noite</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIC04IDQ0OCA0NDgiIHdpZHRoPSI0NDhwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzUyIDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgNjRjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHMtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOHptMCAwIi8+PHBhdGggZD0ibTk2IDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0zODQgMzEyYzAgMy40MDIzNDQtMi4xNDg0MzggNi40Mjk2ODgtNS4zNTkzNzUgNy41NTA3ODEtLjg1MTU2My4yOTI5NjktMS43NDIxODcuNDQ1MzEzLTIuNjQwNjI1LjQ0OTIxOS0yLjQ0MTQwNiAwLTQuNzQ2MDk0LTEuMTEzMjgxLTYuMjY1NjI1LTMuMDIzNDM4bC0zMy43MzQzNzUtNDIuNDE3OTY4LTMzLjczNDM3NSA0Mi40MDIzNDRjLTIuMTE3MTg3IDIuNjYwMTU2LTUuNjgzNTk0IDMuNjk1MzEyLTguODk0NTMxIDIuNTc4MTI0LTMuMjEwOTM4LTEuMTE3MTg3LTUuMzYzMjgyLTQuMTQwNjI0LTUuMzcxMDk0LTcuNTM5MDYydi0xNjhoLTI4OHYyODhoNDQ4di0yODhoLTY0em0wIDAiLz48cGF0aCBkPSJtMzQyLjI2NTYyNSAyNTYuNzM0Mzc1IDI1LjczNDM3NSAzMi4zNjMyODF2LTE0NS4wOTc2NTZoLTY0djE0NS4wOTc2NTZsMjUuNzM0Mzc1LTMyLjM2MzI4MWMxLjUxOTUzMS0xLjkxMDE1NiAzLjgyNDIxOS0zLjAyMzQzNyA2LjI2NTYyNS0zLjAyMzQzN3M0Ljc0NjA5NCAxLjExMzI4MSA2LjI2NTYyNSAzLjAyMzQzN3ptMCAwIi8+PHBhdGggZD0ibTM3NiA1NmMwIDEzLjI1MzkwNi0xMC43NDYwOTQgMjQtMjQgMjRzLTI0LTEwLjc0NjA5NC0yNC0yNHYtMjRoLTgwdjI0YzAgMTMuMjUzOTA2LTEwLjc0NjA5NCAyNC0yNCAyNHMtMjQtMTAuNzQ2MDk0LTI0LTI0di0yNGgtODB2MjRjMCAxMy4yNTM5MDYtMTAuNzQ2MDk0IDI0LTI0IDI0cy0yNC0xMC43NDYwOTQtMjQtMjR2LTI0aC03MnY5Nmg0NDh2LTk2aC03MnptMCAwIi8+PC9zdmc+" width="30" height="30">
                                <span>10 Semestres</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNjIuNzA3LDMzMi45NjNjLTQuMjE3LDIuMTA5LTkuMTk3LDIuMTA5LTEzLjQxNiwwbC0xNDguMjkyLTc0LjE1bDIwLjQyNSw4My4yNjJjMC44MzUsMy4zNjksMi43OTgsNi4zNDMsNS41ODEsOC40MjMNCgkJCWMzNy45NjksMjguNDc3LDgzLjQ4MSw0Mi43MjksMTI4Ljk5NCw0Mi43MjlzOTEuMDI1LTE0LjI1MywxMjguOTk0LTQyLjcyOWMyLjc4My0yLjA4LDQuNzQ2LTUuMDU0LDUuNTgxLTguNDIzbDIwLjQyNS04My4yNjINCgkJCUwyNjIuNzA3LDMzMi45NjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguODQxLDQwNy40MDFDNDk2LjY3Niw0MTUuOTE3LDQ4MS45NDMsNDIxLDQ2Niw0MjFzLTMwLjY3Ni01LjA4My00Mi44NDEtMTMuNTk5QzQyMS44OTcsNDExLjczNSw0MjEsNDE2LjIyOCw0MjEsNDIxDQoJCQljMCwzMS45MzQsMzIuODg2LDU0LjkzMiwzNi42MzYsNTcuNDUxYzUuMDY5LDMuMzk5LDExLjY2LDMuMzk5LDE2LjcyOSwwQzQ3OC4xMTQsNDc1LjkzMiw1MTEsNDUyLjkzNCw1MTEsNDIxDQoJCQlDNTExLDQxNi4yMjgsNTEwLjEwMyw0MTEuNzM1LDUwOC44NDEsNDA3LjQwMXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ4MSwzMDMuNzYzVjE5MC4yNzJsMjIuNzA5LTEwLjg1NEM1MDguNzkyLDE3Ni44NjksNTEyLDE3MS42ODQsNTEyLDE2NnMtMy4yMDgtMTAuODY5LTguMjkxLTEzLjQxOGwtMjQxLTEyMA0KCQkJYy00LjIxOS0yLjEwOS05LjE5OS0yLjEwOS0xMy40MTgsMGwtMjQxLDEyMEMzLjIwOCwxNTUuMTMxLDAsMTYwLjMxNiwwLDE2NnMzLjIwOCwxMC44NjksOC4yOTEsMTMuNDE4bDI0MSwxMjANCgkJCWM0LjIxOSwyLjEwOSw5LjE5OSwyLjEwOSwxMy40MTgsMEw0NTEsMjA1LjI3MnY5OC40OTFjLTE3LjQyMiw2LjIxMy0zMCwyMi43MDctMzAsNDIuMjM3YzAsMjQuODE0LDIwLjE4Niw0NSw0NSw0NQ0KCQkJYzI0LjgxNCwwLDQ1LTIwLjE4Niw0NS00NUM1MTEsMzI2LjQ3LDQ5OC40MjIsMzA5Ljk3Niw0ODEsMzAzLjc2M3ogTTMzMC4yMzgsMTUwLjIzOEMzMTAuNDE5LDE3MC4wNzIsMjg0LjA1MiwxODEsMjU2LDE4MQ0KCQkJcy01NC40MTktMTAuOTI4LTc0LjIzOC0zMC43NjJjLTUuODU5LTUuODU5LTUuODU5LTE1LjM2NiwwLTIxLjIxMWM1Ljg1OS01Ljg1OSwxNS4zNTItNS44NTksMjEuMjExLDANCgkJCWMyOC4zMywyOC4zMyw3Ny43MjUsMjguMzMsMTA2LjA1NSwwYzUuODU5LTUuODU5LDE1LjM1Mi01Ljg1OSwyMS4yMTEsMEMzMzYuMDk4LDEzNC44NzIsMzM2LjA5OCwxNDQuMzc5LDMzMC4yMzgsMTUwLjIzOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" width="30" height="30">
                                <span>Bacharelado</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Curso 3 Fim -->

                <!-- Curso 4 -->
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://faro.edu.br/wp-content/uploads/2020/02/FARO-Site-curso-Contabeis-1200x955-1-300x238.jpg" alt="Card image cap">
                    <div class="card-body separation">

                      <div class="description-text">
                        <h2>Ciências Contábeis</h2>
                        <p class="card-text">
                          O curso de Direito da FARO está baseado na melhor tradição jurídica do Brasil e possui uma formação 
                          interdisciplinar: economia, política, filosofia, sociologia e todas as ciências sociais que contribuem 
                          para uma visão ampla e profunda acerca da compreensão das leis e dos fenômenos jurídicos inseridos na 
                          história e no desenvolvimento da civilização. Ao mesmo tempo, proporciona uma visão humanística e sensível 
                          da realidade e dos problemas sociais que requerem a promoção e distribuição da Justiça.
                        </p>
                      </div>

                      <div class="description-icons">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSItMTIgMCA0NDggNDQ4LjA0NDU1IiB3aWR0aD0iNDQ4cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNC4wMjM0MzggNDQ4LjAzMTI1Yzg1LjcxNDg0My45MDIzNDQgMTY0LjAxMTcxOC00OC40ODgyODEgMjAwLjExNzE4Ny0xMjYuMjMwNDY5LTIyLjcyMjY1NiA5LjkxNDA2My00Ny4zMzIwMzEgMTQuNzY5NTMxLTcyLjExNzE4NyAxNC4yMzA0NjktOTcuMTU2MjUtLjEwOTM3NS0xNzUuODkwNjI2LTc4Ljg0Mzc1LTE3Ni0xNzYgLjk3MjY1Ni02NS43MTg3NSAzNy4yMzQzNzQtMTI1LjgzMjAzMSA5NC45MTAxNTYtMTU3LjM1MTU2Mi0xNS41NTQ2ODgtMS45ODA0NjktMzEuMjMwNDY5LTIuODY3MTg4LTQ2LjkxMDE1Ni0yLjY0ODQzOC0xMjMuNzE0ODQ0IDAtMjI0LjAwMDAwMDUgMTAwLjI4OTA2Mi0yMjQuMDAwMDAwNSAyMjQgMCAxMjMuNzE0ODQ0IDEwMC4yODUxNTY1IDIyNCAyMjQuMDAwMDAwNSAyMjR6bTAgMCIvPjwvc3ZnPg==" width="30" height="30">
                                <span>Noite</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIC04IDQ0OCA0NDgiIHdpZHRoPSI0NDhwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzUyIDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgNjRjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHMtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOHptMCAwIi8+PHBhdGggZD0ibTk2IDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0zODQgMzEyYzAgMy40MDIzNDQtMi4xNDg0MzggNi40Mjk2ODgtNS4zNTkzNzUgNy41NTA3ODEtLjg1MTU2My4yOTI5NjktMS43NDIxODcuNDQ1MzEzLTIuNjQwNjI1LjQ0OTIxOS0yLjQ0MTQwNiAwLTQuNzQ2MDk0LTEuMTEzMjgxLTYuMjY1NjI1LTMuMDIzNDM4bC0zMy43MzQzNzUtNDIuNDE3OTY4LTMzLjczNDM3NSA0Mi40MDIzNDRjLTIuMTE3MTg3IDIuNjYwMTU2LTUuNjgzNTk0IDMuNjk1MzEyLTguODk0NTMxIDIuNTc4MTI0LTMuMjEwOTM4LTEuMTE3MTg3LTUuMzYzMjgyLTQuMTQwNjI0LTUuMzcxMDk0LTcuNTM5MDYydi0xNjhoLTI4OHYyODhoNDQ4di0yODhoLTY0em0wIDAiLz48cGF0aCBkPSJtMzQyLjI2NTYyNSAyNTYuNzM0Mzc1IDI1LjczNDM3NSAzMi4zNjMyODF2LTE0NS4wOTc2NTZoLTY0djE0NS4wOTc2NTZsMjUuNzM0Mzc1LTMyLjM2MzI4MWMxLjUxOTUzMS0xLjkxMDE1NiAzLjgyNDIxOS0zLjAyMzQzNyA2LjI2NTYyNS0zLjAyMzQzN3M0Ljc0NjA5NCAxLjExMzI4MSA2LjI2NTYyNSAzLjAyMzQzN3ptMCAwIi8+PHBhdGggZD0ibTM3NiA1NmMwIDEzLjI1MzkwNi0xMC43NDYwOTQgMjQtMjQgMjRzLTI0LTEwLjc0NjA5NC0yNC0yNHYtMjRoLTgwdjI0YzAgMTMuMjUzOTA2LTEwLjc0NjA5NCAyNC0yNCAyNHMtMjQtMTAuNzQ2MDk0LTI0LTI0di0yNGgtODB2MjRjMCAxMy4yNTM5MDYtMTAuNzQ2MDk0IDI0LTI0IDI0cy0yNC0xMC43NDYwOTQtMjQtMjR2LTI0aC03MnY5Nmg0NDh2LTk2aC03MnptMCAwIi8+PC9zdmc+" width="30" height="30">
                                <span>8 Semestres</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNjIuNzA3LDMzMi45NjNjLTQuMjE3LDIuMTA5LTkuMTk3LDIuMTA5LTEzLjQxNiwwbC0xNDguMjkyLTc0LjE1bDIwLjQyNSw4My4yNjJjMC44MzUsMy4zNjksMi43OTgsNi4zNDMsNS41ODEsOC40MjMNCgkJCWMzNy45NjksMjguNDc3LDgzLjQ4MSw0Mi43MjksMTI4Ljk5NCw0Mi43MjlzOTEuMDI1LTE0LjI1MywxMjguOTk0LTQyLjcyOWMyLjc4My0yLjA4LDQuNzQ2LTUuMDU0LDUuNTgxLTguNDIzbDIwLjQyNS04My4yNjINCgkJCUwyNjIuNzA3LDMzMi45NjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguODQxLDQwNy40MDFDNDk2LjY3Niw0MTUuOTE3LDQ4MS45NDMsNDIxLDQ2Niw0MjFzLTMwLjY3Ni01LjA4My00Mi44NDEtMTMuNTk5QzQyMS44OTcsNDExLjczNSw0MjEsNDE2LjIyOCw0MjEsNDIxDQoJCQljMCwzMS45MzQsMzIuODg2LDU0LjkzMiwzNi42MzYsNTcuNDUxYzUuMDY5LDMuMzk5LDExLjY2LDMuMzk5LDE2LjcyOSwwQzQ3OC4xMTQsNDc1LjkzMiw1MTEsNDUyLjkzNCw1MTEsNDIxDQoJCQlDNTExLDQxNi4yMjgsNTEwLjEwMyw0MTEuNzM1LDUwOC44NDEsNDA3LjQwMXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ4MSwzMDMuNzYzVjE5MC4yNzJsMjIuNzA5LTEwLjg1NEM1MDguNzkyLDE3Ni44NjksNTEyLDE3MS42ODQsNTEyLDE2NnMtMy4yMDgtMTAuODY5LTguMjkxLTEzLjQxOGwtMjQxLTEyMA0KCQkJYy00LjIxOS0yLjEwOS05LjE5OS0yLjEwOS0xMy40MTgsMGwtMjQxLDEyMEMzLjIwOCwxNTUuMTMxLDAsMTYwLjMxNiwwLDE2NnMzLjIwOCwxMC44NjksOC4yOTEsMTMuNDE4bDI0MSwxMjANCgkJCWM0LjIxOSwyLjEwOSw5LjE5OSwyLjEwOSwxMy40MTgsMEw0NTEsMjA1LjI3MnY5OC40OTFjLTE3LjQyMiw2LjIxMy0zMCwyMi43MDctMzAsNDIuMjM3YzAsMjQuODE0LDIwLjE4Niw0NSw0NSw0NQ0KCQkJYzI0LjgxNCwwLDQ1LTIwLjE4Niw0NS00NUM1MTEsMzI2LjQ3LDQ5OC40MjIsMzA5Ljk3Niw0ODEsMzAzLjc2M3ogTTMzMC4yMzgsMTUwLjIzOEMzMTAuNDE5LDE3MC4wNzIsMjg0LjA1MiwxODEsMjU2LDE4MQ0KCQkJcy01NC40MTktMTAuOTI4LTc0LjIzOC0zMC43NjJjLTUuODU5LTUuODU5LTUuODU5LTE1LjM2NiwwLTIxLjIxMWM1Ljg1OS01Ljg1OSwxNS4zNTItNS44NTksMjEuMjExLDANCgkJCWMyOC4zMywyOC4zMyw3Ny43MjUsMjguMzMsMTA2LjA1NSwwYzUuODU5LTUuODU5LDE1LjM1Mi01Ljg1OSwyMS4yMTEsMEMzMzYuMDk4LDEzNC44NzIsMzM2LjA5OCwxNDQuMzc5LDMzMC4yMzgsMTUwLjIzOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" width="30" height="30">
                                <span>Bacharelado</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Curso 4 Fim -->

                <!-- Curso 5 -->
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="https://faro.edu.br/wp-content/uploads/2020/02/FARO-Site-curso-ADM-1200x955-1-300x239.jpg" alt="Card image cap">
                    <div class="card-body separation">

                      <div class="description-text">
                      <h2>Administração</h2>
                        <p class="card-text">
                        O egresso de Administração da FARO abarca os subsídios indispensáveis a um profissional de sucesso, pois ao longo da Graduação 
                        o ensino-aprendizagem é voltado às práticas profissionais que colocam os acadêmicos diante das situações do mercado, possibilitando, assim, 
                        maior conhecimento a respeito das dinâmicas do universo empresarial.
                        </p>
                      </div>

                      <div class="description-icons">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="card" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSItMTIgMCA0NDggNDQ4LjA0NDU1IiB3aWR0aD0iNDQ4cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTIyNC4wMjM0MzggNDQ4LjAzMTI1Yzg1LjcxNDg0My45MDIzNDQgMTY0LjAxMTcxOC00OC40ODgyODEgMjAwLjExNzE4Ny0xMjYuMjMwNDY5LTIyLjcyMjY1NiA5LjkxNDA2My00Ny4zMzIwMzEgMTQuNzY5NTMxLTcyLjExNzE4NyAxNC4yMzA0NjktOTcuMTU2MjUtLjEwOTM3NS0xNzUuODkwNjI2LTc4Ljg0Mzc1LTE3Ni0xNzYgLjk3MjY1Ni02NS43MTg3NSAzNy4yMzQzNzQtMTI1LjgzMjAzMSA5NC45MTAxNTYtMTU3LjM1MTU2Mi0xNS41NTQ2ODgtMS45ODA0NjktMzEuMjMwNDY5LTIuODY3MTg4LTQ2LjkxMDE1Ni0yLjY0ODQzOC0xMjMuNzE0ODQ0IDAtMjI0LjAwMDAwMDUgMTAwLjI4OTA2Mi0yMjQuMDAwMDAwNSAyMjQgMCAxMjMuNzE0ODQ0IDEwMC4yODUxNTY1IDIyNCAyMjQuMDAwMDAwNSAyMjR6bTAgMCIvPjwvc3ZnPg==" width="30" height="30">
                                <span>Noite</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ0OHB0IiB2aWV3Qm94PSIwIC04IDQ0OCA0NDgiIHdpZHRoPSI0NDhwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMzUyIDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0yMjQgNjRjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDhjMC00LjQxNzk2OS0zLjU4MjAzMS04LTgtOHMtOCAzLjU4MjAzMS04IDh2NDhjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOHptMCAwIi8+PHBhdGggZD0ibTk2IDY0YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQ4YzAtNC40MTc5NjktMy41ODIwMzEtOC04LThzLTggMy41ODIwMzEtOCA4djQ4YzAgNC40MTc5NjkgMy41ODIwMzEgOCA4IDh6bTAgMCIvPjxwYXRoIGQ9Im0zODQgMzEyYzAgMy40MDIzNDQtMi4xNDg0MzggNi40Mjk2ODgtNS4zNTkzNzUgNy41NTA3ODEtLjg1MTU2My4yOTI5NjktMS43NDIxODcuNDQ1MzEzLTIuNjQwNjI1LjQ0OTIxOS0yLjQ0MTQwNiAwLTQuNzQ2MDk0LTEuMTEzMjgxLTYuMjY1NjI1LTMuMDIzNDM4bC0zMy43MzQzNzUtNDIuNDE3OTY4LTMzLjczNDM3NSA0Mi40MDIzNDRjLTIuMTE3MTg3IDIuNjYwMTU2LTUuNjgzNTk0IDMuNjk1MzEyLTguODk0NTMxIDIuNTc4MTI0LTMuMjEwOTM4LTEuMTE3MTg3LTUuMzYzMjgyLTQuMTQwNjI0LTUuMzcxMDk0LTcuNTM5MDYydi0xNjhoLTI4OHYyODhoNDQ4di0yODhoLTY0em0wIDAiLz48cGF0aCBkPSJtMzQyLjI2NTYyNSAyNTYuNzM0Mzc1IDI1LjczNDM3NSAzMi4zNjMyODF2LTE0NS4wOTc2NTZoLTY0djE0NS4wOTc2NTZsMjUuNzM0Mzc1LTMyLjM2MzI4MWMxLjUxOTUzMS0xLjkxMDE1NiAzLjgyNDIxOS0zLjAyMzQzNyA2LjI2NTYyNS0zLjAyMzQzN3M0Ljc0NjA5NCAxLjExMzI4MSA2LjI2NTYyNSAzLjAyMzQzN3ptMCAwIi8+PHBhdGggZD0ibTM3NiA1NmMwIDEzLjI1MzkwNi0xMC43NDYwOTQgMjQtMjQgMjRzLTI0LTEwLjc0NjA5NC0yNC0yNHYtMjRoLTgwdjI0YzAgMTMuMjUzOTA2LTEwLjc0NjA5NCAyNC0yNCAyNHMtMjQtMTAuNzQ2MDk0LTI0LTI0di0yNGgtODB2MjRjMCAxMy4yNTM5MDYtMTAuNzQ2MDk0IDI0LTI0IDI0cy0yNC0xMC43NDYwOTQtMjQtMjR2LTI0aC03MnY5Nmg0NDh2LTk2aC03MnptMCAwIi8+PC9zdmc+" width="30" height="30">
                                <span>8 Semestres</span>
                              </li>
                              <li class="list-content">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNjIuNzA3LDMzMi45NjNjLTQuMjE3LDIuMTA5LTkuMTk3LDIuMTA5LTEzLjQxNiwwbC0xNDguMjkyLTc0LjE1bDIwLjQyNSw4My4yNjJjMC44MzUsMy4zNjksMi43OTgsNi4zNDMsNS41ODEsOC40MjMNCgkJCWMzNy45NjksMjguNDc3LDgzLjQ4MSw0Mi43MjksMTI4Ljk5NCw0Mi43MjlzOTEuMDI1LTE0LjI1MywxMjguOTk0LTQyLjcyOWMyLjc4My0yLjA4LDQuNzQ2LTUuMDU0LDUuNTgxLTguNDIzbDIwLjQyNS04My4yNjINCgkJCUwyNjIuNzA3LDMzMi45NjN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik01MDguODQxLDQwNy40MDFDNDk2LjY3Niw0MTUuOTE3LDQ4MS45NDMsNDIxLDQ2Niw0MjFzLTMwLjY3Ni01LjA4My00Mi44NDEtMTMuNTk5QzQyMS44OTcsNDExLjczNSw0MjEsNDE2LjIyOCw0MjEsNDIxDQoJCQljMCwzMS45MzQsMzIuODg2LDU0LjkzMiwzNi42MzYsNTcuNDUxYzUuMDY5LDMuMzk5LDExLjY2LDMuMzk5LDE2LjcyOSwwQzQ3OC4xMTQsNDc1LjkzMiw1MTEsNDUyLjkzNCw1MTEsNDIxDQoJCQlDNTExLDQxNi4yMjgsNTEwLjEwMyw0MTEuNzM1LDUwOC44NDEsNDA3LjQwMXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ4MSwzMDMuNzYzVjE5MC4yNzJsMjIuNzA5LTEwLjg1NEM1MDguNzkyLDE3Ni44NjksNTEyLDE3MS42ODQsNTEyLDE2NnMtMy4yMDgtMTAuODY5LTguMjkxLTEzLjQxOGwtMjQxLTEyMA0KCQkJYy00LjIxOS0yLjEwOS05LjE5OS0yLjEwOS0xMy40MTgsMGwtMjQxLDEyMEMzLjIwOCwxNTUuMTMxLDAsMTYwLjMxNiwwLDE2NnMzLjIwOCwxMC44NjksOC4yOTEsMTMuNDE4bDI0MSwxMjANCgkJCWM0LjIxOSwyLjEwOSw5LjE5OSwyLjEwOSwxMy40MTgsMEw0NTEsMjA1LjI3MnY5OC40OTFjLTE3LjQyMiw2LjIxMy0zMCwyMi43MDctMzAsNDIuMjM3YzAsMjQuODE0LDIwLjE4Niw0NSw0NSw0NQ0KCQkJYzI0LjgxNCwwLDQ1LTIwLjE4Niw0NS00NUM1MTEsMzI2LjQ3LDQ5OC40MjIsMzA5Ljk3Niw0ODEsMzAzLjc2M3ogTTMzMC4yMzgsMTUwLjIzOEMzMTAuNDE5LDE3MC4wNzIsMjg0LjA1MiwxODEsMjU2LDE4MQ0KCQkJcy01NC40MTktMTAuOTI4LTc0LjIzOC0zMC43NjJjLTUuODU5LTUuODU5LTUuODU5LTE1LjM2NiwwLTIxLjIxMWM1Ljg1OS01Ljg1OSwxNS4zNTItNS44NTksMjEuMjExLDANCgkJCWMyOC4zMywyOC4zMyw3Ny43MjUsMjguMzMsMTA2LjA1NSwwYzUuODU5LTUuODU5LDE1LjM1Mi01Ljg1OSwyMS4yMTEsMEMzMzYuMDk4LDEzNC44NzIsMzM2LjA5OCwxNDQuMzc5LDMzMC4yMzgsMTUwLjIzOHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" width="30" height="30">
                                <span>Bacharelado</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Curso 5 Fim -->

          </div>
        </div>
      </div>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </div>

@endsection