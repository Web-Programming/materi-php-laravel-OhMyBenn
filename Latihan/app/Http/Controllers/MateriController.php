<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('materi.index', compact('materi'));
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Materi::create(['nama' => $request->nama]);

        return redirect()->route('materi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Materi::findOrFail($id);
        return view('materi.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Materi::findOrFail($id);
        return view('materi.create', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $item = Materi::findOrFail($id);
        $item->update(['nama' => $request->nama]);

        return redirect()->route('materi.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Materi::findOrFail($id);
        $item->delete();

        return redirect()->route('materi.index')->with('success', 'Data berhasil dihapus.');
    }
}
