<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Http\Request;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = cast::all();
        return view('back.cast.index', compact('cast'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        $cast = new cast;

        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->save();


        return redirect('/cast')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = cast::find($id);

        if (!$cast) {
            return redirect('/cast')->with('error', 'Data tidak ditemukan.');
        }

        return view('back.cast.show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = cast::find($id);

        return view('back.cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        $cast = cast::find($id);

        if (!$cast) {
            return redirect('/cast')->with('error', 'Data tidak ditemukan.');
        }

        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');

        $cast->save();

        return redirect('/cast')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = cast::find($id);

        if (!$cast) {
            return redirect('/cast')->with('error', 'Data tidak ditemukan.');
        }

        $cast->delete();

        return redirect('/cast')->with('success', 'data berhasil dihapus');
    }
}