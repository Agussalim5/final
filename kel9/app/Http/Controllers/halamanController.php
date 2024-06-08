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
}
