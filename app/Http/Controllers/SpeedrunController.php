<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Speedrun;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SpeedrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Game $game
     * @return Response
     */
    public function index(Game $game)
    {
        $game->load('speedruns');
        //dd($game);
        return view('pages.games.speedruns.index', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Speedrun $speedrun
     * @param Game $game
     * @return Response
     */
    public function show( Game $game)
    {
        $game->load('speedruns');
        return view('pages.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Speedrun $speedrun
     * @return Response
     */
    public function edit(Speedrun $speedrun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Speedrun $speedrun
     * @return Response
     */
    public function update(Request $request, Speedrun $speedrun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Speedrun $speedrun
     * @return Response
     */
    public function destroy(Speedrun $speedrun)
    {
        //
    }
}
