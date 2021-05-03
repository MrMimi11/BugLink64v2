<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Game $game
     * @return Response
     */
    public function index(Game $game)
    {
        $game->load('bugs');
        //dd($game);
        return view('pages.games.bugs.index', compact('game'));
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
     * @param Bug $bug
     * @param Game $game
     * @return Response
     */
    public function show(Game $game)
    {
        $game->load('bugs');
        return view('pages.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bug $bug
     * @return Response
     */
    public function edit(Bug $bug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Bug $bug
     * @return Response
     */
    public function update(Request $request, Bug $bug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bug $bug
     * @return Response
     */
    public function destroy(Bug $bug)
    {
        //
    }
}
