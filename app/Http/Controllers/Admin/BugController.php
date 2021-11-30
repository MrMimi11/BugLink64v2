<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminBugRequest;
use App\Models\Bug;
use App\Models\Category;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bugs = Bug::with('categories', 'game', 'user')->latest('updated_at')->paginate(5);
        return view('admin.index', compact('bugs'));
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
        $bug->load('categories', 'game', 'user');
        $categories = Category::all();
        $categoriesKey = $bug->categories->pluck('slug')->toArray();
        $games = Game::all();
        return view('admin.show', compact('bug', 'categories', 'games', 'categoriesKey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdminBugRequest $request
     * @param Bug $bug
     * @return Response
     */
    public function update(AdminBugRequest $request, Bug $bug)
    {
        $inputs = collect($request->validated());
        $bug->update([
            'title' => $inputs->get('title'),
            'slug' => Str::slug($inputs->get('title')),
            'description' => $inputs->get('description'),
            'video' => $inputs->get('video'),
            'validated_at' => (bool) $inputs->get('validated') ? now() : null,
            'game_id' => $inputs->get('game'),
            'user_id' => User::first()->id,
        ]);
        $bug->categories()->sync($request->input('categories'));
        return redirect()->route('admin.bugs.show', $bug)->with('success', 'bug mis a jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
