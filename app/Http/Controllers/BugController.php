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
     * @return Response
     */
    public function index(Game $game)
    {
        $game->load('bugs');
        dd($game);
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
     * @return Response
     */
    public function show(Bug $bug)
    {
        //
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
