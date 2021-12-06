<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->validated());
        return redirect()->route('profile.index')->with('success', 'Profile successfully updated');
    }

    public function password(PasswordRequest $request)
    {
        auth()->user()->update([
            'password' => Hash::make($request->get('new_password'))
        ]);
        return redirect()->route('profile.index')->with('success', 'Password successfully updated');
    }
}
