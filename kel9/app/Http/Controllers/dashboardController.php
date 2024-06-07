<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('back.Bdashboard');
    }
}
