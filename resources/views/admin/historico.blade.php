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
    <link rel="stylesheet" href="{{ asset('css/stylehistorico.css')}}">
    <!--Icone do site-->
    <link rel="shortcut icon" href="{{ asset('icone.png')}}" type="image/x-png">
    <title>Agenda</title>
</head>

<body>
    <!--Valores do Backgrounds-->
    <section class="bg">
        <div class="imagem-bg"></div>
    </section>
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
    <!--Conteudos-->
    <section class="head">
        <div class="config">
            <div class="msg">Bem-Vindo</div>
            <div class="usuario">{{ Auth::user()->name }}</div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
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
            <div class="all">
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
                                    <th>Situação</th>
                                </tr>
                            </thead>
                            <!--Dados da tabela-->
                            <tbody>
                                <!--Dados da tabela-->
                                @foreach($agendamentos as $agendamento)
                                <tr>
                                    <td >{{$agendamento->id}}</td>
                                    <td>{{$agendamento->evento}}</td>
                                    <td>{{$agendamento->data}}</td>
                                    <td>{{$agendamento->hora}}</td>
                                    <td>{{$agendamento->descricao}}</td>
                                    <td>{{$agendamento->categoria}}</td>
                                    <td>Concluido</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </section>
    </section>
</body>

</html>
