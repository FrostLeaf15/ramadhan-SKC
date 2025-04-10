<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Maintenance</title>
</head>

<body>
    <div class="grid h-screen place-content-center bg-white px-4">
        <div class="text-center">
            <h1 class="text-9xl font-black text-gray-200">503</h1>

            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Maintenance</p>

            <p class="mt-4 text-gray-500">Mohon Maaf, halaman yang anda tuju sedang dalam perbaikan.</p>
            <p class="mt-4 text-gray-500">Untuk sementara, halaman input akan dialihkan ke halaman Google Form.</p>
            <p class="mt-4 text-gray-500">Mohon untuk menunggu.</p>

            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd753JbEQo5npiKd3aspFZ_zn4qhe92jMj8E-PBQhyhjMzjXQ/viewform?usp=sharing"
                class="mt-6 inline-block rounded-sm bg-indigo-600 px-5 py-3 text-sm font-medium text-white hover:bg-indigo-700 focus:ring-3 focus:outline-hidden">
                Go to Form
            </a>
        </div>
    </div>
</body>

</html>
