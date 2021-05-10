<?php

namespace App\Http\Controllers;

use App\Http\Requests\BugRequest;
use App\Models\Bug;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

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
    public function create(Game $game, Bug $bug)
    {
        return view('pages.games.bugs.create', compact('game', 'bug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $postRequest
     * @param Request $request
     * @return void
     */
    public function store(BugRequest $request, Game $game)
    {
        // comme ici
        $title = $request->input('title');
        Bug::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'game_id' => $game->id,
            'description'=> $request->input('description'),
            'video'=> $request->input('video'),
        ]);
        return redirect()->route('games.bugs.index', $game->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @param Bug $bug
     * @return Response
     */
    public function show(Game $game, Bug $bug)
    {
        $game->load('bugs');
        return view('pages.games.bugs.show', compact('game', 'bug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bug $bug
     * @param Game $game
     * @return Response
     */
    public function edit(Game $game, Bug $bug)
    {
        return view('pages.games.bugs.edit', compact('game', 'bug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $game
     * @param Bug $bug
     * @return void
     */
    public function update(Request $request, Game $game, Bug $bug)
    {
        $title = $request->input('title');
        $bug->update([
            'title' => $title,
            'slug' => Str::slug($title),
            'game_id' => $game->id,
            'description'=> $request->input('description'),
            'video'=> $request->input('video'),
        ]);
        return redirect()->route('games.bugs.index', [$game->slug, $bug->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @param Bug $bug
     * @return Response
     */
    public function destroy(Game $game, Bug $bug) //variable du model
    {
        $bug->delete();
        return redirect()->route('games.bugs.index', compact('game'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Bug $bug
     * @param Game $game
     * @return Response
     */
    public function search(Bug $bug, Game $game)
    {
        $q = request()->input('q');
        $bugs = Bug::where('title', 'like', "%$q%")
            ->orWhere('description', 'like', "%$q%")
            ->paginate(0);
        //dd($bugs);

        return view('pages.games.bugs.resultsearch', compact('game'))->with('bugs', $bugs);
    }
}

