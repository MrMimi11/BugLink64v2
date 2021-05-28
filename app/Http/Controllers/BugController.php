<?php

namespace App\Http\Controllers;

use App\Http\Requests\BugRequest;
use App\Models\Bug;
use App\Models\Category;
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
        $game->load('categories.bugs');
        $bugs = $game->categories()->where('categories.name', 'all')->first()->bugs()->get();
        if (request()->query('category')) {
            $cat = $game->categories()->where('slug', request()->query('category'))->first();
            if ($cat != null)
            {
                $bugs = $cat->bugs()->where('game_id', $game->id)->get();
            }
        }
        return view('pages.games.bugs.index', compact('game', 'bugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Game $game
     * @param Bug $bug
     * @param Category $categories
     * @return Response
     */
    public function create(Game $game, Bug $bug, Category $categories)
    {
        $categories = Category::all();
        return view('pages.games.bugs.create', compact('game', 'bug', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BugRequest $request
     * @param Game $game
     * @param Bug $bugs
     * @return void
     */
    public function store(BugRequest $request, Game $game, Bug $bugs)
    {
        $categories = $request->input("categories");
        $title = $request->input('title');
        $newBug = Bug::create([
            'title' => $title,
            'slug' => Str::slug($title),
            'game_id' => $game->id,
            'description'=> $request->input('description'),
            'video'=> $request->input('video'),
        ]);
        $newBug->categories()->sync($categories);
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
     * @param Game $game
     * @param Bug $bug
     * @param Category $categories
     * @return Response
     */
    public function edit(Game $game, Bug $bug, Category $categories)
    {
        $categories = Category::all();
        return view('pages.games.bugs.edit', compact('game', 'bug', 'categories'));
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
        $goodurl = str_replace('watch?v=', 'embed/', $request->input('video'));
        $bug->update([
            'title' => $title,
            'slug' => Str::slug($title),
            'game_id' => $game->id,
            'description'=> $request->input('description'),
            'video'=> $goodurl
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
    public function destroy(Game $game, Bug $bug) //model variable
    {
        $bug->categories()->detach();
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

