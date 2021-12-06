<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        Carbon::setLocale('fr');
        $users = User::query()->latest('created_at')->paginate(20);
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function ban(User $user)
    {
        if (!$user->is_admin) {
            $user->update([
                'is_banned' => true
            ]);
            return redirect()->route('admin.users.index')->with('success', 'User banned');
        }
        return redirect()->route('admin.users.index')->with('success', 'No');
    }

    public function unban(User $user)
    {
        $user->update([
            'is_banned' => false
        ]);
        return redirect()->route('admin.users.index')->with('success', 'User unbanned');
    }
}
