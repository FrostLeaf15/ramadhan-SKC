<?php

namespace App\Http\Controllers;

use App\Models\Ceramah;
use App\Http\Requests\StoreCeramahRequest;
use Illuminate\Http\Request;

class CeramahController extends Controller
{
    public function index(Request $request)
    {
        $query = Ceramah::query();

        if ($request->kelas) $query->where('kelas_user', $request->kelas);
        if ($request->jurusan) $query->where('jurusan_user', $request->jurusan);
        if ($request->tanggal) $query->whereDate('tanggal_input', $request->tanggal);

        return response()->json($query->get());
    }

    public function store(StoreCeramahRequest $request)
    {
        $data = $request->validated();

        switch ($data['tipe_isi']) {
            case 'teks':
                $data['isi'] = $data['isi_teks'];
                break;

            case 'gambar':
                if ($request->hasFile('isi_gambar')) {
                    $path = $request->file('isi_gambar')->store('ceramah/gambar');
                    $data['isi'] = $path;
                }
                break;

            case 'dokumen':
                if ($request->hasFile('isi_dokumen')) {
                    $path = $request->file('isi_dokumen')->store('ceramah/dokumen');
                    $data['isi'] = $path;
                }
                break;
        }

        // dd($data);
        // Simpan ke database
        Ceramah::create([
            'nama_user' => $data['nama_user'],
            'kelas_user' => $data['kelas_user'],
            'jurusan_user' => $data['jurusan_user'],
            'nama_penceramah' => $data['nama_penceramah'],
            'lokasi_ceramah' => $data['lokasi_ceramah'],
            'tanggal_input' => $data['tanggal_input'],
            'tipe_isi' => $data['tipe_isi'],
            'isi_teks' => $data['isi_teks'] ?? null,
            'isi_gambar' => $data['isi_gambar'] ?? null,
            'isi_dokumen' => $data['isi_dokumen'] ?? null,
        ]);

        return redirect()->back()->with('message', 'Data ditambahkan');
    }

    public function show(Ceramah $ceramah)
    {
        return response()->json($ceramah);
    }

    public function update(Request $request, Ceramah $ceramah)
    {
        $ceramah->update($request->all());
        return response()->json(['message' => 'Data ceramah diupdate']);
    }

    public function destroy(Ceramah $ceramah)
    {
        $ceramah->delete();
        return response()->json(['message' => 'Data ceramah dihapus']);
    }
}
