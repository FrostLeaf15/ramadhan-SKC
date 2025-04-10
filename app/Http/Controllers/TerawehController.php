<?php

namespace App\Http\Controllers;

use App\Models\Teraweh;
use Illuminate\Http\Request;

class TerawehController extends Controller
{
    public function index(Request $request)
    {
        $query = Teraweh::query();

        if ($request->kelas) $query->where('kelas_user', $request->kelas);
        if ($request->jurusan) $query->where('jurusan_user', $request->jurusan);
        if ($request->tanggal) $query->whereDate('tanggal_input', $request->tanggal);

        return response()->json($query->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'kelas_user' => 'required',
            'jurusan_user' => 'required',
            'tanggal_input' => 'required|date',
            'status' => 'required|in:saya teraweh,saya berhalangan,saya sakit',
        ]);

        Teraweh::create($request->all());
        return redirect()->back()->with('message', 'Data ditambahkan');
    }

    public function show(Teraweh $teraweh)
    {
        return response()->json($teraweh);
    }

    public function update(Request $request, Teraweh $teraweh)
    {
        $teraweh->update($request->all());
        return response()->json(['message' => 'Data teraweh diupdate']);
    }

    public function destroy(Teraweh $teraweh)
    {
        $teraweh->delete();
        return response()->json(['message' => 'Data teraweh dihapus']);
    }
}
