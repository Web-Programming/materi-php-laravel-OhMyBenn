<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        Prodi::create(['nama' => $request->nama]);

        return redirect()->route('prodi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Prodi::findOrFail($id);
        return view('prodi.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Prodi::findOrFail($id);
        return view('prodi.create', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $item = Prodi::findOrFail($id);
        $item->update(['nama' => $request->nama]);

        return redirect()->route('prodi.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Prodi::findOrFail($id);
        $item->delete();

        return redirect()->route('prodi.index')->with('success', 'Data berhasil dihapus.');
    }
}
