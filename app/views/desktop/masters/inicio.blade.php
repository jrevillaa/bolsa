<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Bolsa de Trabajo</title>
    <link href="//fonts.googleapis.com/css?family=Muli:300|Josefin+Slab:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/standardize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
</head>
<body class="body home clearfix">
<div class="c-nav clearfix">
    <img class="logo" src="{{ asset('images/logo_ITQ_original-120x131.png') }}" data-rimage data-src="{{ asset('images/logo_ITQ_original-120x131.png') }}">
</div>
<div class="c-main clearfix">
    <p class="titulo">Bolsa de Trabajo del Instituto Tecnológico de Querétaro.</p>

    @include("partials/desktop/bolsa/mensajes")

    @yield("contenido")
</div>

<script src="{{ asset('js/jquery-min.js') }}"></script>
<script src="{{ asset('js/rimages.js')}}"></script>
</body>
</html>
