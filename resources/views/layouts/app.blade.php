<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title or 'Ejercicio'}}</title>

    <!-- Scripts -->
    {!! Html::script('js/app.js') !!}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Styles -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
    {{ $css or ''}}
</head>
<body>
    <div id="app">
        @include('layouts.partials.nav')

        <main class="py-4">

            {{ $content }}
        </main>
    </div>
    {!! Html::script('bootstrap/js/bootstrap.bundle.min.js') !!}
    <!-- Core plugin JavaScript-->
    {{ $scripts or ''}}
</body>
</html>
