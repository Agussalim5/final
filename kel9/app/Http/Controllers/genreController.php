<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class genreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = genre::all();
        return view('back.genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $genre = new genre;

        $genre->nama = $request->nama;

        $genre->save();


        return redirect('/genre')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = genre::find($id);

        return view('back.genre.edit', ['genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $genre = genre::find($id);

        if (!$genre) {
            return redirect('/genre')->with('error', 'Data tidak ditemukan.');
        }

        $genre->nama = $request->input('nama');

        $genre->save();

        return redirect('/genre')->with('success', 'Data berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { {
            $genre = genre::find($id);

            if (!$genre) {
                return redirect('/genre')->with('error', 'Data tidak ditemukan.');
            }

            $genre->delete();

            return redirect('/genre')->with('success', 'data berhasil dihapus');
        }
    }
}
