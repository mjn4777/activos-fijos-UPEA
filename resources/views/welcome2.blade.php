<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vendor/adminlte/dist/img/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">

        <title>Laravel</title>

        

        
    </head>
    <body class="container">
        
        <nav>
        <p class="logo">INGENIERÍA DE SISTEMAS</p>
            <ul>
                <li><a href="{{ route('login') }}" >Entrar</a></li>
                <li><a href="{{ route('register') }}">Registrar</a></li>
                
            </ul>
        </nav>
        <header>
            <h1>BIENVENIDOS</h1>
            <h1>Sistema de activos fijos</h1>
            <p> <br></p>
            <button><a href="{{ route('login') }}" >Entrar</a></button>
        
        </header>
        
        <img class="emp" src="vendor/adminlte/dist/img/upea.png" alt="">
        <img class="fondo-emp" src="vendor/adminlte/dist/img/fa.png" alt="">
        <img class="fondo-emp" src="vendor/adminlte/dist/img/fa.png" alt="">
    </body>
</html>
