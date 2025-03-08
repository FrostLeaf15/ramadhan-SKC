@extends('layout.app-menu-login')

@section('title', 'mengaji')

@section('content')
    <div class="judul">
        <h1 class="text-center text-3xl font-bold text-gray-900 uppercase py-2">Mengaji</h1>
    </div>
    <div class="isi container">
        <div class="waktu text-center">
            <div id="waktu"></div>
        </div>
        <div class="form min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <form action="{{ route('ngaji.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan_user" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Nama Surat</label>
                    <input type="text" name="nama_surat" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Ayat Quran</label>
                    <input type="text" name="ayat_quran" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <button type="submit"
                    class="btn btn-primary bg-green-400 px-6 py-3 rounded-xl mt-2 border border-black hover:bg-green-200 transition delay-100 duration-300 ease-in-out">Simpan</button>
            </form>

        </div>
    </div>
@endsection
