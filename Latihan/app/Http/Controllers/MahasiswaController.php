<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index()
    {
        $mhs = Mhs::all();
        return view('mhs.index', compact('mhs'));
    }

    public function create()
    {
        return view('mhs.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        Mhs::create(['nama' => $request->nama]);

        return redirect()->route('mhs.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $item = Mhs::findOrFail($id);
        return view('mhs.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Mhs::findOrFail($id);
        return view('mhs.create', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $item = Mhs::findOrFail($id);
        $item->update(['nama' => $request->nama]);

        return redirect()->route('mhs.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        $item = Mhs::findOrFail($id);
        $item->delete();

        return redirect()->route('mhs.index')->with('success', 'Data berhasil dihapus.');
    }
}
