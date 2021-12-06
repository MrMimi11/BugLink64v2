<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Game $game)
    {
        $bugs = Bug::with('categories', 'game')->latest('created_at')->active()->limit(3)->get();
        return view('home.index', compact('game', 'bugs'));
    }

    /**
     * Display the specified resource.
     *
     * @param Home $home
     * @return Response
     */
    public function show()
    {
        return view('home.show');
    }
}
