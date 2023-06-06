<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <title>Laravel Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
        {{-- @vite('resources/scss/app.js') --}}
    </head>
    <body class="bg-dark text-white">

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.brands')
        @include('partials.footer')

    </body>
</html>
