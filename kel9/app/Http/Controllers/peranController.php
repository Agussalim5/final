<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use App\Models\Film;
use App\Models\Cast;

class peranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peran = Peran::with(['film', 'cast'])->get();
        return view('back.peran.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = film::all();
        $casts = cast::all();
        return view('back.peran.create', compact('films', 'casts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required|exists:film,id',
            'cast_id' => 'required|exists:cast,id',
            'nama' => 'required|string|max:255',
        ]);

        peran::create($request->all());

        return redirect('/peran')->with('success', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peran = peran::with(['film', 'cast'])->findOrFail($id);
        return view('back.peran.show', compact('peran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peran = peran::findOrFail($id);
        $films = film::all();
        $casts = cast::all();
        return view('back.peran.edit', compact('peran', 'films', 'casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'film_id' => 'required|exists:film,id',
            'cast_id' => 'required|exists:cast,id',
            'nama' => 'required|string|max:255',
        ]);

        $peran = peran::findOrFail($id);
        $peran->update($request->all());

        return redirect('/peran')->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peran = peran::findOrFail($id);
        $peran->delete();

        return redirect('/peran')->with('success', 'data berhasil dihapus');
    }
}