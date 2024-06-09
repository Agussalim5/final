<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function index()
    {
        $movie = film::with('genre')->paginate(6);
        return view('front.home', compact('movie'));
    }

    public function detail($slug)
    {
        $movie = Film::where('slug', $slug)
            ->where('is_active', '1')
            ->firstOrFail();
        return view('front.detail', [
            'movie' => $movie,
        ]);
    }
}
