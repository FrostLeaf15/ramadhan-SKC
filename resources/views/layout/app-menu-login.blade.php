<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/img/icon/favicon.png') }}" type="image/png">

    {{-- Link CSS --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    </style>

    {{-- Title --}}

    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('layout.navbar-login')
    </header>

    <main class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        @yield('content')
    </main>

    <footer>
        @include('layout.footer')
    </footer>

    {{-- @vite('resources/js/main.js') --}}
    {{-- @vite('resources/js/navbar.js') --}}
</body>

</html>
