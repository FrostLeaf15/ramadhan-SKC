@extends('layout.app-menu-login')

@section('title', 'ceramah')

@section('content')

    <div class="isi">
        <div class="form min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="judul">
                <h1 class="text-center text-3xl font-bold text-gray-900 uppercase py-2">Ceramah</h1>
            </div>
            <div class="waktu text-center">
                <div id="masehi-date"></div>
                <div id="hijri-date"></div>
            </div>
            <form action="{{ route('ceramah.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama_user" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Kelas</label>
                    <input type="text" name="kelas_user" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan_user" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Nama Penceramah</label>
                    <input type="text" name="nama_penceramah" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Lokasi Ceramah</label>
                    <input type="text" name="lokasi_ceramah" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal_input" class="form-control blocks w-full rounded-md" required>
                </div>

                <div class="mb-3">
                    <label>Tipe Isi</label>
                    <select name="tipe_isi" class="form-control blocks w-full rounded-md" id="tipe_isi" required>
                        <option disabled selected hidden>-- Pilih Format Input --</option>
                        <option value="teks">Teks</option>
                        <option disabled>-- Pilihan Tidak Tersedia --</option>
                        <option disabled>-- Pilihan Tidak Tersedia --</option>
                        {{-- <option value="gambar">Gambar</option> --}}
                        {{-- <option value="dokumen">Dokumen</option> --}}
                    </select>
                </div>

                <div id="input-teks" class="mb-3">
                    <label>Isi Ceramah (Teks)</label>
                    <textarea name="isi_teks" class="form-control blocks w-full rounded-md"></textarea>
                </div>

                <div id="input-gambar" class="mb-3" style="display:none;">
                    <label>Upload Gambar</label>
                    <input type="file" name="isi_gambar" class="form-control blocks w-full rounded-md">
                </div>

                <div id="input-dokumen" class="mb-3" style="display:none;">
                    <label>Upload Dokumen</label>
                    <input type="file" name="isi_dokumen" class="form-control blocks w-full rounded-md">
                </div>

                <button type="submit"
                    class="btn btn-primary bg-green-400 px-6 py-3 rounded-xl mt-2 border border-black hover:bg-green-200 transition delay-100 duration-300 ease-in-out">Simpan</button>
            </form>
        </div>
    </div>
@endsection
