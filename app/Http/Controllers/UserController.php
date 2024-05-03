<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function create()
    {
        return view('user.create');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function goForbidden()
    {
        return view('user.forbidden');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.login')->with('success', 'Account created.');
    }
}
