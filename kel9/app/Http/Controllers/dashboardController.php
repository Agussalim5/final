<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $genreCount = genre::count();
        return view('back.Bdashboard', compact('genreCount'));
    }
}
