<?php

namespace App\Http\Controllers;

use App\Models\Ngaji;
use Illuminate\Http\Request;

class NgajiController extends Controller
{
    public function index(Request $request)
    {
        $query = Ngaji::query();

        if ($request->kelas) $query->where('kelas_user', $request->kelas);
        if ($request->jurusan) $query->where('jurusan_user', $request->jurusan);
        if ($request->nama_surat) $query->where('nama_surat', 'like', '%'.$request->nama_surat.'%');

        return response()->json($query->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'kelas_user' => 'required',
            'jurusan_user' => 'required',
            'nama_surat' => 'required',
            'ayat_quran' => 'required',
        ]);

        Ngaji::create($request->all());
        return redirect()->back()->with('message', 'Data ditambahkan');
    }

    public function show(Ngaji $ngaji)
    {
        return response()->json($ngaji);
    }

    public function update(Request $request, Ngaji $ngaji)
    {
        $ngaji->update($request->all());
        return response()->json(['message' => 'Data ngaji diupdate']);
    }

    public function destroy(Ngaji $ngaji)
    {
        $ngaji->delete();
        return response()->json(['message' => 'Data ngaji dihapus']);
    }
}
