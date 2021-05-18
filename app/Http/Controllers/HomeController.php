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
        $game = Game::with('bugs')->where('slug', 'the-legend-of-zelda-ocarina-of-time')->first();
        return view('pages.games.show', compact('game'));
    }

    /**
     * @return array
     */
    public function majora()
    {
        $majora = Game::with('bugs')->where('slug', 'the-legend-of-zelda-majoras-mask')->first();
        return [$majora];
    }
}
