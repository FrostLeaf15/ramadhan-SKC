@extends('layout.app-menu-login')

@section('title', 'Menu')

@section('content')

    <div class="isi-konten">
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <header class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Welcome, <span class="text-red-500">{user}</span></h2>
                    <p class="mx-auto mt-4 max-w-md text-gray-500">
                        Selesaikan Tugas Ramadhan Harian Anda!!
                    </p>
                </header>

                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <li>
                        <a href="/home/puasa" class="group block overflow-hidden">
                            <img src="{{ asset('img/asset/shaum.png') }}" alt=""
                                class="bg-white h-[350px] w-full object-cover border rounded-lg transition duration-500 group-hover:scale-105 group-hover:rounded sm:h-[450px]" />
                            <h2 class="text-center text-xl pt-2">Puasa</h2>
                        </a>
                    </li>

                    <li>
                        <a href="/home/mengaji" class="group block overflow-hidden">
                            <img src="{{ asset('img/asset/mengaji.png') }}" alt=""
                                class="bg-white h-[350px] w-full object-cover border rounded-lg transition duration-500 group-hover:scale-105 group-hover:rounded sm:h-[450px]" />
                            <h2 class="text-center text-xl pt-2">Mengaji</h2>
                        </a>
                    </li>

                    <li>
                        <a href="/home/teraweh" class="group block overflow-hidden">
                            <img src="{{ asset('img/asset/ibadah.png') }}" alt=""
                                class="bg-white h-[350px] w-full object-cover border rounded-lg transition duration-500 group-hover:scale-105 group-hover:rounded sm:h-[450px]" />
                            <h2 class="text-center text-xl pt-2">Teraweh</h2>
                        </a>
                    </li>

                    <li>
                        <a href="/home/maintenance" class="group block overflow-hidden">
                            <img src="{{ asset('img/asset/ceramah.png') }}" alt=""
                                class="bg-white h-[350px] w-full object-cover border rounded-lg transition duration-500 group-hover:scale-105 group-hover:rounded sm:h-[450px]" />
                            <h2 class="text-center text-xl pt-2">Ceramah</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

@endsection
