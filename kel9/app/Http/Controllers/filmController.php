<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\film;
use App\models\genre;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = film::with('genre')->get();
        return view('back.film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = genre::all();
        return view('back.film.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'nullable',
            'tahun' => 'required|integer',
            'poster' => 'nullable|image',
            'is_active' => 'required',  
            'genre_id' => 'required|exists:genre,id',
        ]);

        $filmData = $request->all();
        $filmData['slug'] = Str::slug($request->judul);

        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('posters', 'public');
            $filmData['poster'] = $path;
        }

        Film::create($filmData);

        return redirect('/film')->with('success', 'data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = film::with('genre')->findOrFail($id);
        return view('back.film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = film::findOrFail($id);
        $genre = genre::all();
        return view('back.film.edit', compact('film', 'genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'nullable',
            'tahun' => 'required|integer',
            'poster' => 'nullable|image',
            'is_active' => 'required',
            'genre_id' => 'required|exists:genre,id',
        ]);

        $film = Film::findOrFail($id);
        $filmData = $request->all();
        $filmData['slug'] = Str::slug($request->judul);

        if ($request->hasFile('poster')) {
            if ($film->poster) {
                Storage::disk('public')->delete($film->poster);
            }

            $path = $request->file('poster')->store('posters', 'public');
            $filmData['poster'] = $path;
        } else {
            $filmData['poster'] = $film->poster;
        }

        $film->update($filmData);

        return redirect('/film')->with('success', 'data berhasil di perbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = film::findOrFail($id);

        if ($film->poster) {
            Storage::disk('public')->delete($film->poster);
        }

        $film->delete();

        return redirect('/film')->with('success', 'data berhail dihapus.');
    }
}
