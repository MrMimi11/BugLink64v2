<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('login.registration_page');
    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'pseudo' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ]);
//    }
//
//    /**
//     * Create a new user instance after a valid registration.
//     *
//     * @param  array  $data
//     * @return \App\User
//     */
//    protected function store(array $data, Request $request)
//    {
//        $data = User::create($request->all());
//        return User::create([
//            'pseudo' => $data['pseudo'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
//    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'email' => 'required',
            'password' => 'required',//Hash::make($data['password']),//Hash::make($request->password),
        ]);

        User::create($request->all());
        return redirect()->route('home.index');
    }
}
