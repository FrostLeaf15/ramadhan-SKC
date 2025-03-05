<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link CSS --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    </style>

    {{-- Title --}}

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/img/icon/favicon.png') }}" type="image/png">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('layout.navbar')
    </header>

    <main class="bg-stone-50">
        @yield('content')
    </main>

    <footer>
        @include('layout.footer')
    </footer>

    @vite('resources/js/navbar.js')
</body>

</html>
