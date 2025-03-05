@extends('layout.app-menu')

@section('title', 'Home')

@section('content')

<section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('/img/bg/bg-ramadhan.png');">
    <div
        class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 sm:bg-gradient-to-r">
    </div>

    <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
        <div class="max-w-xl text-center sm:text-left">
            <h1 class="text-3xl font-extrabold text-white sm:text-5xl">
                Ramadhan bersama

                <strong class="block font-extrabold text-rose-500"> SMK Kesehatan Cianjur </strong>
            </h1>

            <p class="mt-4 max-w-lg text-white sm:text-xl/relaxed">
                Marhaban ya Ramadan! Saatnya membersihkan hati, memperbanyak ibadah, dan mendekatkan diri kepada
                Allah.
            </p>

            <div class="mt-8 flex flex-wrap gap-4 text-center">
                <a href="/home"
                    class="block w-full rounded-sm bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:ring-3 focus:outline-hidden sm:w-auto">
                    Login
                </a>

                <a href="/register"
                    class="block w-full rounded-sm bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow-sm hover:text-rose-700 focus:ring-3 focus:outline-hidden sm:w-auto">
                    Register
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
