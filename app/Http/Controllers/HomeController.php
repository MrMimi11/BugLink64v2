<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Home $home
     * @return Response
     */
    public function show(Home $home)
    {
        return view('home.show', compact('home'));
    }

    /**
     * @return array
     */
    public function ocarina()
    {
        $game = Game::with('bugs', 'categories')->where('slug', 'ocarina-of-time')->first();
        $game->categories->each(function($Category) {
            debug($Category->name);
        });
        return view('pages.games.show', compact('game'));
    }

    /**
     * @return array
     */
    public function majora()
    {
        $game = Game::with('bugs', 'categories')->where('slug', 'majora-s-mask')->first();
        $game->categories->each(function($Category) {
            debug($Category->name);
        });
        return view('pages.games.show', compact('game'));
    }
}
