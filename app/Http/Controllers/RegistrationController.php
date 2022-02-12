<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        //retourne la vue, c'est à dire la page pour se créer un compte
        return view('login.registration_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RegistrationRequest $registrationRequest
     * @return void
     */
    public function store(RegistrationRequest $registrationRequest)
    {
        //création variable inputs où on va lui dire que ce qu'il y a dans le RegistrationRequest doit être valide donc valider la requête
        $inputs = $registrationRequest->validated();
        //on va créer un User à partir du model
        User::create([
            //la colonne 'pseudo' va prendre en compte la variable inputs qu'on a défini dessus et on va lui dire de valider le nom du input qui est pseudo
            //(name = 'pseudo' dans le input)
            'pseudo' => $inputs['pseudo'],
            //la colonne 'email' va prendre en compte la variable inputs qu'on a défini dessus et on va lui dire de valider le nom du input qui est pseudo
            //(name = 'email' dans le input)
            'email' => $inputs['email'],
            //la colonne 'password' va prendre en compte un model Hash:make qui servira à hasher le mot de passe dans la base de données lors
            // de l'envoie du formulaire car on a pas le droit de le stocker en clair la variable inputs qu'on a défini dessus
            // et on va lui dire de valider le nom du input qui est pseudo (name = 'password' dans le input)
            'password' => Hash::make($inputs['password'])
        ]);
        //redirection sur la vue home.index qui est la page d'accueil une fois qu'on s'est inscrit
        return redirect()->route('connection.index');
    }
}
