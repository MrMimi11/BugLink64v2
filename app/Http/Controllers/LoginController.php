<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('login.connection_page');
    }


    public function login(LoginRequest $request)
    {
        $inputs = $request->validated();
        //chercher un utilisateur via l'email
        $user = User::where('email', $inputs['email'])->first(); //first: récupère 1er element de la connexion
        //dd(Hash::check('password', $user->password)); //vérifier le hash de l'utlisateur
        if ($user) { //on va vérifier que l'utilisateur n'est pas null
            //Compare le mot de passe du formulaire au mot de passe hashé
            //prend le mot de passe dans le formulaire, il va le hasher et va vérif après dans la base de donnée
            if (Hash::check($inputs['password'], $user->password)) { //$2y$ = type de hashage, clé de solt (généré aléatoirement)
                //Si c'est le même alors authentification
                auth()->login($user); //authentifier l'utilisateur
                // auth()->user()->notify(new NewConnectionNotification);
                return redirect()->route('home.index');
            } else {
                //Sinon redirection vers la page index
                return redirect()->route('connection.index')->with('error', 'email et/ou mot de passe incorrects');
            }
        }
        return redirect()->route('connection.index')->with('error', 'Aucun utilisateur n\'a été trouvé'); //si c'est null
    }

    //Fonction deconnexion et retour vers la page de login.
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('connection.index');
    }
}
