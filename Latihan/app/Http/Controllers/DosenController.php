<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        Dosen::create(['nama' => $request->nama]);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Dosen::findOrFail($id);
        return view('dosen.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Dosen::findOrFail($id);
        return view('dosen.create', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $item = Dosen::findOrFail($id);
        $item->update(['nama' => $request->nama]);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Dosen::findOrFail($id);
        $item->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus.');
    }
}
