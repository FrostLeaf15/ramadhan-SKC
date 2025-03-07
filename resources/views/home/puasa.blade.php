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

            <select class="rounded-lg" name="pilihan-puasa" id="pilihan-puasa">
                <option disabled hidden selected>-- Silahkan Pilih --</option>
                <option value="saya berpuasa">Saya Berpuasa</option>
                <option value="saya halangan">Saya Sedang Halangan</option>
                <option value="saya sakit">Saya Sedang Sakit</option>
            </select>

            {{-- <form action="{{ route('puasa.store') }}" method="post"> --}}
            {{-- @csrf --}}
            {{-- <input type="hidden" name="tanggal" value="{{ $tanggal }}"> --}}
            {{-- <input type="hidden" name="bulan" value="{{ $bulan }}"> --}}
            {{-- <input type="hidden" name="tahun" value="{{ $tahun }}"> --}}
            {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
            {{-- <input type="hidden" name="status" value="1"> --}}
            {{-- <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Ya</button> --}}
        </div>
    </div>

    <br><br><br>

    <div class="container">
        <h2>Tambah Data Puasa</h2>

<form action="{{ route('puasa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama User</label>
                <input type="text" name="nama_user" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kelas User</label>
                <input type="text" name="kelas_user" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jurusan User</label>
                <input type="text" name="jurusan_user" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tanggal Input</label>
                <input type="date" name="tanggal_input" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Status Puasa</label>
                <select name="status" class="form-control" required>
                    <option value="saya berpuasa">Saya Berpuasa</option>
                    <option value="saya berhalangan">Saya Berhalangan</option>
                    <option value="saya sakit">Saya Sakit</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
