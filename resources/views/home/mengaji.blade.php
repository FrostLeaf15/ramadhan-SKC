@extends('layout.app-menu-login')

@section('title', 'mengaji')

@section('content')
    <div class="container">
        <h2>Tambah Data Mengaji</h2>

        <form action="{{ route('ngaji.store') }}" method="POST">
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
                <label>Nama Surat</label>
                <input type="text" name="nama_surat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Ayat Quran</label>
                <input type="text" name="ayat_quran" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
