<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPasswordRequest;
use App\Http\Requests\PasswordResetLinkRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function show()
    {
        return view('login.forgot');
    }
    public function send(PasswordResetLinkRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'email sended')
            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
    }

    public function reset(Request $request)
    {
        return view('login.reset', ['request' => $request]);
    }

    public function update(NewPasswordRequest $request)
    {
        $status = Password::reset(
            $request->validated(),
            function (User $user) use($request) {
                $this->updateValidatedPassword($user, $request);
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('connection.index')->with('status', __($status))
            : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]);
    }

    private function updateValidatedPassword(User $user,NewPasswordRequest $request): void
    {
        $user->forceFill([
            'password' => Hash::make($request['password']),
            'remember_token' => Str::random(60),
        ])->save();

        event(new PasswordReset($user));
    }
}
