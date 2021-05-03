<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Home $home
     * @return Response
     */
    public function show(Home $home)
    {
        return view('home.show', compact('home'));
    }
}
