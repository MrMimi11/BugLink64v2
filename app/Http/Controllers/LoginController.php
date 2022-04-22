<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.connection_page');
    }


    public function login(LoginRequest $request)
    {
        $inputs = $request->validated();
        if(auth()->attempt([
            'email' => $inputs['email'],
            'password' => $inputs['password']
        ], true)) {
            return redirect()->route('home.index');
        }
        //authentifier l'utilisateur
        // auth()->user()->notify(new NewConnectionNotification);
        return redirect()->route('connection.index')->with('error', 'Account information missmatch');
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
