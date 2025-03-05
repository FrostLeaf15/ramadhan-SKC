@extends('layout.app-menu-login')

@section('title', 'Puasa')

@section('content')
    <div class="judul">
        <h1 class="text-center text-3xl font-bold text-gray-900 uppercase py-2">Puasa</h1>
    </div>

    <div class="isi">
        <div class="waktu">
            <div id="waktu"></div>
        </div>
        <div class="submit">
            <h1>Apakah anda puasa hari ini?</h1>
            {{-- <form action="{{ route('puasa.store') }}" method="post"> --}}
                @csrf
                {{-- <input type="hidden" name="tanggal" value="{{ $tanggal }}"> --}}
                {{-- <input type="hidden" name="bulan" value="{{ $bulan }}"> --}}
                {{-- <input type="hidden" name="tahun" value="{{ $tahun }}"> --}}
                {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                {{-- <input type="hidden" name="status" value="1"> --}}
                {{-- <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ya</button> --}}
        </div>
    </div>
@endsection