<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        @include('layout.navbar')
    </header>

    <main>
        <section class="bg-gray-900 text-white">
            <div class="mx-auto max-w-screen-md px-4 py-32 lg:flex lg:h-screen lg:items-center">
                <div class="mx-auto max-w-3xl text-center">
                    <h1
                        class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl uppercase">
                        Ramadhan
                        <span class="sm:block"> SMK Kesehatan Cianjur </span>
                    </h1>

                    <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                        Raihlah berkah ramadhan bersama SMK Kesehatan Cianjur.
                    </p>

                    {{-- <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a class="block w-full rounded-sm border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:ring-3 focus:outline-hidden sm:w-auto"
                            href="#">
                            Official Website
                        </a>

                        <a class="block w-full rounded-sm border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:ring-3 focus:outline-hidden sm:w-auto"
                            href="#">
                            Pendaftaran
                        </a>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>

    <footer>
        @include('layout.footer')
    </footer>
<script src="/js/navbar.js"></script>
</body>

</html>
