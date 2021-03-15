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

<body>
    <!--Valores do Backgrounds-->
    <section class="bg">
        <div class="imagem-bg"></div>
    </section>
    <!--Conteudos-->
    <section class="head-screen">
     <i class="fas fa-home"></i>
       <i class="fas fa-search"></i>
     <i class="far fa-calendar-plus"></i>
        <i class="fas fa-sign-out-alt"></i>
    </section>
    <section class="head">
        <div class="config">
            <div class="msg">Bem-Vindo</div>
            <div class="usuario">Guilherme Araujo</div>
            <button class="btn-logout"><i class="fas fa-sign-out-alt">Sair</i></button>
        </div>
    </section>
    <section class="container">
        <nav class="navbar">
            <a href="/dashboard">
                <div class="agenda"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i>Agenda</div>
            </a>
            <a href="/historico">
                <div class="historico"><i class="fas fa-history" style="margin-right: 5px;"></i>Historico</div>
            </a>
        </nav>
        <section class="main">
            <div class="agendar">
                <h1 class="titulo-agenda"><i class="far fa-calendar-alt" style="margin-right: 5px;"></i>Agendar</h1>
                <form class="formulario">
                    <div class="evento">
                        <input type="text" class="evento-agendar" placeholder="Evento...">
                    </div>
                    <div class="data-time">
                        <input type="date" class="data-agendar" placeholder="00/05/2021">
                        <input type="time" class="horas-agendar" placeholder="00:00">
                    </div>
                    <div class="categoria">
                        <input type="text" class="categoria-agendar" placeholder="Categoria...">
                    </div>
                    <div class="descricao">
                        <textarea class="descricao-agendar" placeholder="Descrição..." maxlength="20"></textarea>
                    </div>
                </form>
                <div class="btn">
                    <button type="submit" class="btn-save"><i class="fas fa-check"
                            style="margin-right: 5px;"></i>SALVAR</button>
                    <button type="reset" class="btn-reset"><i class="fas fa-trash-restore"
                            style="margin-right: 5px;"></i>LIMPAR</button>
                </div>
                <section class="avisos">
                    <div class="popup-save">Evento foi adicionado!</div>
                    <div class="popup-check">Evento foi concluido!</div>
                    <div class="popup-edit">As alterações foram salvas!</div>
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
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <!--Inicio dos dados que pode ser apagados-->
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Aniversario</td>
                                <td>11/03/2021</td>
                                <td>15:00</td>
                                <td>Comprar presente</td>
                                <td>Festa</td>
                                <td>
                                    <div class="btn-table">
                                        <button class="btn-check"><i class="far fa-check-circle"></i></button>
                                        <button class="btn-edit"><i class="far fa-edit"></i></button>
                                        <button class="btn-del"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <!--Fim dos dados que pode ser apagados-->
                        </tbody>
                    </table>

                </section>

            </div>
            </div>
        </section>
        <!--creditos-->
        <a onclick="abrir()">
            <p class="credito">Creditos - Click Aqui</p>
        </a>
    </section>
    <!--Estrutura do pop-->
    <div class="pop">
        <div id="popup" class="popup">
            <button class="closed" onclick="fechar()"><i class="fas fa-times"></i></button>
            <img src="img/logo.png" style="width: 150px; height: 150px;">
            <h1>Obrigado!</h1>
            <p>A nossa equipe agradece a sua visita.</p>
            <p style="margin-top: 10px;">Alunos: André, Guilherme, Isabelly, Janismar e Miguel.</p>
            <p style="margin-top: 10px;">Projeto desenvolvido em PHP, CSS Puro, Laravel(Back-End).</p>
        </div>
        <div class="opaco" id="pop"></div>
</body>
<script>
    /*Script POP*/
    function abrir() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('pop').style.display = 'block';
    }
    function fechar() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('pop').style.display = 'none';
    }
</script>

</html>
