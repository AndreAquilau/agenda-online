@if (!Auth::user())
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
        <!--Link do CSS-->
        <link rel="shortcut icon" href="{{ asset('icone.png')}}" type="image/x-png">
        <title>Agenda</title>
        <script src="https://kit.fontawesome.com/3d5793b601.js" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer>window.location.reload();</script>
    </head>
    <body class="font-sans antialiased" id="app-root">
@endif
      @if (!Auth::user())
          @inertia
      @endif
@if (!Auth::user())
    </body>
</html>
@endif
