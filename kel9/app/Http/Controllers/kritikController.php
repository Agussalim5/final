<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\kritik;
use App\models\film;

class kritikController extends Controller
{
   
    public function index()
    {
        $kritiks = kritik::with('user', 'film')->get();
        return view('back.kritik.index', compact('kritiks'));
    }

    public function create()
    {
        $films = film::all();
        return view('back.kritik.create', compact('films'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required|exists:film,id',
            'content' => 'required',
            'point' => 'required|integer|min:1|max:5'
        ]);

        kritik::create([
            'user_id' => auth()->id(),
            'film_id' => $request->film_id,
            'content' => $request->content,
            'point' => $request->point
        ]);

        return redirect()->route('kritik.index')->with('success', 'Review has been added');
    }
}
