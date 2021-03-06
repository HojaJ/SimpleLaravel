<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Elementary Laravel')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            padding-top: 3.5rem;
        }
    </style>
</head>
<body>
@include('layouts.partials.navbar')
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
