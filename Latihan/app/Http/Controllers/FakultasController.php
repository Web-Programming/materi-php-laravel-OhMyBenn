<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        Fakultas::create(['nama' => $request->nama]);

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Fakultas::findOrFail($id);
        return view('fakultas.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Fakultas::findOrFail($id);
        return view('fakultas.create', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $item = Fakultas::findOrFail($id);
        $item->update(['nama' => $request->nama]);

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Fakultas::findOrFail($id);
        $item->delete();

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil dihapus.');
    }
}
