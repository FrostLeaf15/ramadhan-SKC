<?php

namespace App\Http\Controllers;

use App\Models\Puasa;
use Illuminate\Http\Request;

class PuasaController extends Controller
{
    public function index(Request $request)
    {
        $query = Puasa::query();

        // Filter berdasarkan kelas, jurusan, atau tanggal
        if ($request->kelas) $query->where('kelas_user', $request->kelas);
        if ($request->jurusan) $query->where('jurusan_user', $request->jurusan);
        if ($request->tanggal) $query->whereDate('tanggal_input', $request->tanggal);

        $data = $query->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_user' => 'required',
            'kelas_user' => 'required',
            'jurusan_user' => 'required',
            'tanggal_input' => 'required|date',
            'status' => 'required|in:saya berpuasa,saya berhalangan,saya sakit',
        ]);

        Puasa::create($request->all());
        return redirect()->route('puasa.index')->with('success', 'Data puasa ditambahkan');    }

    public function show(Puasa $puasa)
    {
        return response()->json($puasa);
    }

    public function update(Request $request, Puasa $puasa)
    {
        $request->validate([
            'status' => 'required|in:saya berpuasa,saya berhalangan,saya sakit',
        ]);

        $puasa->update($request->all());
        return response()->json(['message' => 'Data puasa diupdate']);
    }

    public function destroy(Puasa $puasa)
    {
        $puasa->delete();
        return response()->json(['message' => 'Data puasa dihapus']);
    }
}
