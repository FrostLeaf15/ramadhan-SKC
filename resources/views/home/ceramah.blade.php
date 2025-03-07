@extends('layout.app-menu-login')

@section('title', 'ceramah')

@section('content')
    <div class="container">
        {{-- <div id="waktu"></div> --}}
        <h2>Tambah Data Ceramah</h2>

        <form action="{{ route('ceramah.store') }}" method="POST" enctype="multipart/form-data">
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
                <label>Tipe Isi</label>
                <select name="tipe_isi" class="form-control" id="tipe_isi" required>
                    <option value="teks">Teks</option>
                    <option value="gambar">Gambar</option>
                    <option value="dokumen">Dokumen</option>
                </select>
            </div>

            <div id="input-teks" class="mb-3">
                <label>Isi Ceramah (Teks)</label>
                <textarea name="isi_teks" class="form-control"></textarea>
            </div>

            <div id="input-gambar" class="mb-3" style="display:none;">
                <label>Upload Gambar</label>
                <input type="file" name="isi_gambar" class="form-control">
            </div>

            <div id="input-dokumen" class="mb-3" style="display:none;">
                <label>Upload Dokumen</label>
                <input type="file" name="isi_dokumen" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script>
        document.getElementById('tipe_isi').addEventListener('change', function() {
            let tipe = this.value;
            document.getElementById('input-teks').style.display = tipe === 'teks' ? 'block' : 'none';
            document.getElementById('input-gambar').style.display = tipe === 'gambar' ? 'block' : 'none';
            document.getElementById('input-dokumen').style.display = tipe === 'dokumen' ? 'block' : 'none';
        });
    </script>
@endsection
