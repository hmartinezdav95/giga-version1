<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giga-store</title>

    <!--Styles -->
    <link rel="stylesheet" href="{{asset('fonts/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">



</head>
<body class="antialiased">
<div id="app">
    <seller_registration-component></seller_registration-component>
</div>
</body>
<script src="{{ mix('/js/app.js') }}"></script>
</html>
