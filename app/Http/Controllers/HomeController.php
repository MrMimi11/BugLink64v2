<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Game $game)
    {
        return view('home.index', compact('game'));
    }

    /**
     * Display the specified resource.
     *
     * @param Home $home
     * @return Response
     */
    public function show(Home $home)
    {
        return view('home.show', compact('home', 'game'));
    }

    /**
     * @return array
     */
    public function ocarina(Game $game, Bug $bug)
    {
        $game = Game::with('bugs', 'categories')->where('slug', 'ocarina-of-time')->first();
        $game->categories->each(function($Category) {
            debug($Category->name);
        });
        $game->load('categories.bugs');
        $bugs = $game->categories()->where('categories.name', 'all')->first()->bugs()->get();
        if (request()->query('category')) {
            $cat = $game->categories()->where('slug', request()->query('category'))->first();
            if ($cat != null)
            {
                $bugs = $cat->bugs()->where('game_id', $game->id)->get();
            }
        }
        return view('pages.games.bugs.index', compact('game', 'bugs', 'bug'));
    }

    /**
     * @return array
     */
    public function majora(Game $game, Bug $bug)
    {
        $game = Game::with('bugs', 'categories')->where('slug', 'majora-s-mask')->first();
        $game->categories->each(function($Category) {
            debug($Category->name);
        });
        $game->load('categories.bugs');
        $bugs = $game->categories()->where('categories.name', 'all')->first()->bugs()->get();
        if (request()->query('category')) {
            $cat = $game->categories()->where('slug', request()->query('category'))->first();
            if ($cat != null)
            {
                $bugs = $cat->bugs()->where('game_id', $game->id)->get();
            }
        }
        return view('pages.games.bugs.index', compact('game', 'bugs', 'bug'));
    }
}
