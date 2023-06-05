<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
        {{-- @vite('resources/scss/app.js') --}}
    </head>
    <body class="bg-dark text-white">

        <main>
            @yield('content')
        </main>

    </body>
</html>
