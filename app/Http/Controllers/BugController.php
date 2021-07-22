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
    public function index(Game $game) //Game = Model
    {
        //chargement des bugs en fonctions de la catégorie
        $game->load('categories.bugs');
        //création variable bugs et assigner à bugs les catégories de jeu où il va prendre tous les noms de catégories en commençant par la 1ère
        // et ensuite récupérer les bugs
        $bugs = $game->categories()
            ->where('categories.name', 'all')
            ->first()
            ->bugs()
            ->get();
        //si la requête est égale à la catégorie
        if (request()->query('category')) {
            //assigner à cat, le jeu avec les catégories qu'il a, et on va voir la colonne slug pour faire une requête au niveau de la catégorie
            // création variable cat et on va prendre la 1ère = quand on clique sur la catégorie, le slug change avec le query ?category=any
            $cat = $game->categories()->where('slug', request()->query('category'))->first();
            //si la catégorie est différent de null (=rien)
            if (!$cat) {
                return view('pages.games.bugs.index', compact('game', 'bugs'))->with('error', 'Cette catégorie n\'existe pas');
            }
            //créer une variable bugs et on va assigner la variable bugs en lui disant que le bug appartient à cette catégorie dans le jeu
            // en vérifiant le games id (1 = oot 2= mm)
            $bugs = $cat->bugs()->where('game_id', $game->id)->get();
        }
        //on lui retourne la vue avec les variables game et bugs pour savoir quel jeu et quel bug
        return view('pages.games.bugs.index', compact('game', 'bugs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Game $game
     * @param Bug $bug
     * @return Response
     */
    public function create(Game $game, Bug $bug)
    {
        //on va récupérer toutes les relations du model catégory (donc games et bugs)
        $categories = Category::all();
        //on retourne la vue de la page pour créer un bug avec les 3 variables
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
        //création d'une variable categories où on va lui dire de faire une requête sur l'input où le nom est 'categories'
        // dans le formulaire création bug (name = 'categories' dans le input)
        $categories = $request->input("categories");
        //création d'une variable title où on va lui dire de faire une requête sur l'input où le nom est 'title'
        // dans le formulaire création bug (name = 'title' dans le input)
        $title = $request->input('title');
        //la variable newBug va prendre le model Bug (au niveau de la fonction fillable) et va créer le bug en fonction des champs
        $newBug = Bug::create([
            //on va lui dire que dans la colonne 'title' ça va correspondre à la variable $title qu'on a mis au dessus
            'title' => $title,
            //on va lui dire que dans la colonne 'slug' il doit prendre le $title qu'on lui a mis et doit le transformer en minuscule et avec des _
            // pour que ça soit dans l'url
            'slug' => Str::slug($title),
            //la colonne 'game_id" récupère le jeu avec son id auquel on poste le bug
            'game_id' => $game->id,
            //la colonne 'description' va faire une requête sur l'input où le nom est 'description' dans le formulaire création bug
            //(name = 'description' dans le input)
            'description'=> $request->input('description'),
            //la colonne 'video' va faire une requête sur l'input où le nom est 'video' dans le formulaire création bug
            //(name = 'video' dans le input)
            'video'=> $request->input('video'),
        ]);
        //le nouveau bug qu'on aura poster va se synchroniser avec les catégories qu'on aura choisi dans le formulaire
        $newBug->categories()->sync($categories);
        //retourne la vue après l'envoie du formulaire avec l'url du bon jeu où il a poster (ex: il a posté sur oot il va être redirigé sur oot)
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
        //détache le bug de la catégorie auquel il a été assigné
        $bug->categories()->detach();
        //supprime le bug avec la fonction delete() de laravel
        $bug->delete();
        //retourne sur la route index après la suppression du bug
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

