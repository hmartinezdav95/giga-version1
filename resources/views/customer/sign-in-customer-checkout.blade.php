<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giga-store</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round" rel="stylesheet">


    <!--Styles -->
    <link rel="stylesheet" href="/fonts/css/style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <style>
        #foot{
            /**background-color: rgb(32, 28, 90);*/
            background-color: rgb(25, 21, 90);
            color:#fff;
        }
    </style>
</head>
<body>
<div id="app">
    <sign-in-customer-checkout></sign-in-customer-checkout>
</div>
</body>


<!-- @extends('footer.footer');-->
<script src="{{ mix('/js/app.js') }}"></script>
</html>
