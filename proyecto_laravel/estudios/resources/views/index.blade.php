<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
</head>
<body>
    <h1>ESTOY EN EL MAIN</h1>
    <h2>Hola, {{$nombre}}</h2>
    <p>El número aleatorio es {{$n}}.</p>
    <ul>
        <li><a href="contacto">Ponte en Contacto con nosotros</a></li>
        <li><a href="about">Sobre Nosotros</a></li>
        <li><a href="noticias">Actualizate con las ultimas noticias</a></li>
    </ul>
</body>
</html>
