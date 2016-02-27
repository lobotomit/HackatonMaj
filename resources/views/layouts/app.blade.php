<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!--A continuacion tipo de pagina, cod caracteres-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!--Fuerza determinado renderizado con IE-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Name - @yield('title')</title>
    <meta name="description" content="Pagina de prueba Hackaton">
    <meta name="author" content="Espartanos">
    <!--Titulo de la pagina-->
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')
@yield('content')
@include('layouts.footer')
</body>
@yield('scripts')
<script src="https://googlemaps.github.io/js-marker-clusterer/examples/data.json"></script>

</html>