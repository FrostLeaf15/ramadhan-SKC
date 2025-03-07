@extends('layout.app-menu-login')

@section('title', 'teraweh')

@section('content')
    <div class="container">
        
        <h2>Tambah Data Teraweh</h2>

        <form action="{{ route('teraweh.store') }}" method="POST">
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
                <label>Status Teraweh</label>
                <select name="status" class="form-control" required>
                    <option value="saya teraweh">Saya Teraweh</option>
                    <option value="saya berhalangan">Saya Berhalangan</option>
                    <option value="saya sakit">Saya Sakit</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@endsection
