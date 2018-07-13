<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ejercicio') }}</title>

    <!-- Scripts -->
    {!! Html::script('js/app.js') !!}
    {!! Html::style('css/bootstrap/css/bootstrap.min.css') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="bg-dark">
    <div id="app">
        @if( Request::path() !== 'login')
            @include('layouts.partials.nav')
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}" defer></script>
    @yield('scripts')
</body>
</html>
