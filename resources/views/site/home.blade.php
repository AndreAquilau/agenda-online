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
    <link rel="stylesheet" href="{{ asset('css/stylelogin.css')}}">
    <!--Icone do site-->
    <link rel="shortcut icon" href="{{ asset('icone.png')}}" type="image/x-png">
    <title>Agenda</title>
</head>
<body>
    <section class="container">
        <img src="{{asset('img/logo.png')}}" class="logo">
        <h1>Acesso Administrativo</h1>
        <!--
        <div class="acesso">
        <input type="text" class="info" placeholder="Digite o seu Usuario!">
        <input type="password" class="info" placeholder="Digite a sua senha!">
        </div>
        -->
        <button type="submit" class="btn"><a href="/login">Entrar</a></button>
        <button type="submit" class="btn"><a href="/register">Cadastra-se</a></button>
        <!--
        <div class="help">
        <a href="#"><p class="link">Esqueci minha senha!</p></a>
        <a href="/login"><p class="link">Voltar para o inicio!</p></a></div>
        <a href="/login"><p class="link">Voltar para o inicio!</p></a></div>
        -->
    </section>

</body>
</html>
