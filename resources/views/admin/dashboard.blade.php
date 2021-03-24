<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Link dos icones-->
    <script src="https://kit.fontawesome.com/3d5793b601.js" crossorigin="anonymous"></script>
    <!--Link das fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!--Link do CSS-->
    <link rel="stylesheet" href="{{ asset('css/styledashboard.css')}}">
    <!--Icone do site-->
    <link rel="shortcut icon" href="{{ asset('icone.png')}}" type="image/x-png">
    <title>Agenda</title>
</head>

<body id="dashboard">
    <!--Valores do Backgrounds-->
    @auth
    <section class="bg">
        <div class="imagem-bg"></div>
    </section>
    <!--Conteudos-->
    <section class="head-screen">
        <div class="btn-head"><i class="fas fa-home"></i></div>
        <div class="btn-head"><i class="fas fa-history"></i></div>
        <div class="btn-head"> <i class="fas fa-search"></i></div>
        <div class="btn-head"> <i class="far fa-calendar-plus"></i></div>
        <div class="btn-head"> <i class="fas fa-sign-out-alt"></i></div>
    </section>
    <div class="pesquisar">
        <input class="search" type="search" placeholder="O que você procura?"><button
            class="btn-search">Pesquisar</button>
    </div>
    <section class="head">
        <div class="config">
            <div class="msg">Bem-Vindo</div>
            <div class="usuario">{{ Auth::user()->name }}</div>
            <form method="POST" class="msg" action="{{ route('logout') }}">
                @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Sair') }}
                </x-jet-dropdown-link>
            </form>
        </div>
    </section>
    <section class="container">
        <nav class="navbar">
            <a href="{{ route('dashboard') }}">
                <div class="agenda"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i>Agenda</div>
            </a>
            <a href="{{ route('historico') }}">
                <div class="historico"><i class="fas fa-history" style="margin-right: 5px;"></i>Historico</div>
            </a>
        </nav>
        <section class="main">
            <div class="agendar">
                <h1 class="titulo-agenda"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i>Agendar</h1>
                <form action="{{ route('registrar_agenda') }}" method="POST" class="formulario">
                  @method('POST')
                  @csrf
                    <div class="evento">
                        <input type="text" name="evento" class="evento-agendar" placeholder="Evento...">
                    </div>
                    <div class="data-time">
                        <input type="date" name="data" class="data-agendar" placeholder="00/05/2021">
                        <input type="time" name="hora" class="horas-agendar" placeholder="00:00">
                    </div>
                    <div class="categoria">
                        <input type="text" name="categoria"  class="categoria-agendar" placeholder="Categoria...">
                    </div>
                    <div class="descricao">
                        <textarea name="descricao" class="descricao-agendar" placeholder="Descrição..." maxlength="20"></textarea>
                    </div>
                <div class="btn">
                    <button type="submit" class="btn-save"><i class="fas fa-check"
                            style="margin-right: 5px;"></i>SALVAR</button>
                    <button type="reset" class="btn-reset"><i class="fas fa-trash-restore"
                            style="margin-right: 5px;"></i>LIMPAR</button>
                </div>
                </form>
                <section class="avisos">
                    <div class="popup-save">Evento foi adicionado!</div>
                    <div class="popup-check">Evento foi concluido!</div>
                   <!-- <div class="popup-edit">As alterações foram salvas!</div> -->
                    <div class="popup-del">Evento foi excluido!</div>
                </section>
            </div>
            <div class="registro">
                <section class="tabela">
                    <!--Tabela de dados-->
                    <table class="content-table">
                        <!--Cabeçalho da tabela-->
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Evento</th>
                                <th>Data</th>
                                <th>Horario</th>
                                <th>Descrição</th>
                                <th>Categoria</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <!--Dados da tabela-->
                        <tbody>
                            <!--Dados da tabela-->
                            @foreach($agendamentos as $agendamento)
                            <tr>
                                <td>{{$agendamento->id}}</td>
                                <td>{{$agendamento->evento}}</td>
                                <td>{{$agendamento->data}}</td>
                                <td>{{$agendamento->hora}}</td>
                                <td>{{$agendamento->descricao}}</td>
                                <td>{{$agendamento->categoria}}</td>

                                <td>
                                    <div class="btn-table" >
                                        <form action="{{ route('update_confirm_agenda', $agendamento->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn-check" ><i class="far fa-check-circle"></i></button>
                                        </form>
                                        <form action="{{ route('dashboard_editar', $agendamento->id)}}" method="post">
                                            @csrf
                                            @method('GET')
                                            <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        </form>
                                        <form action="{{ route('destroy_agenda', $agendamento->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </section>

            </div>
            </div>
        </section>
        <!--creditos-->
           <p class="credito" id="open">Creditos - Click Aqui</p>
    </section>
    <!--Estrutura do pop-->
    <div class="pop">
        <div id="popup" class="popup">
            <button class="closed" id="close" ><a href="{{ route('dashboard') }}"><i class="fas fa-times"></i></a></button>
            <img src="{{asset('img/logo.png')}}" style="width: 150px; height: 150px;">
            <h1>Obrigado!</h1>
            <p>A nossa equipe agradece a sua visita.</p>
            <p style="margin-top: 10px;">Alunos: André, Guilherme, Isabelly, Janismar e Miguel.</p>
            <p style="margin-top: 10px;">Projeto desenvolvido em PHP, CSS Puro, Laravel(Back-End).</p>
        </div>
    </div>
    <div class="opaco" id="pop"></div>
    <script src="{{asset('js/dashboard.js')}}">
      window.location.reload();
    </script>
    @endauth
</body>

</html>
