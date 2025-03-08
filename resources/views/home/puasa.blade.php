@extends('layout.app-menu-login')

@section('title', 'Puasa')

@section('content')
    <div class="judul">
        <h1 class="text-center text-3xl font-bold text-gray-900 uppercase py-2">Puasa</h1>
    </div>

    <div class="isi container">
        <div class="waktu text-center">
            <div id="waktu"></div>
        </div>
        <div class="form min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <form action="{{ route('puasa.store') }}" method="POST">
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
                    <label>Tanggal Input</label>
                    <input type="date" name="tanggal_input" class="form-control blocks w-full rounded-xl mt-1" required>
                </div>

                <div class="mb-3">
                    <label>Status Puasa</label>
                    <select name="status" class="form-control blocks w-full rounded-xl mt-1" required>
                        <option disabled hidden selected>-- Apakah Anda Berpuasa --</option>
                        <option value="saya berpuasa">Saya Berpuasa</option>
                        <option value="saya berhalangan">Saya Berhalangan</option>
                        <option value="saya sakit">Saya Sakit</option>
                    </select>
                </div>

                <button type="submit"
                    class="btn btn-primary bg-green-400 px-6 py-3 rounded-xl mt-2 border border-black hover:bg-green-200 transition delay-100 duration-300 ease-in-out">Simpan</button>
            </form>
        </div>
    </div>



@endsection
