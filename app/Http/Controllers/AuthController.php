<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function doLogin(Request $request)
    {
        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect()->route('posts.home');
        } else {
            return redirect()->route('user.login')->with('error', 'Wrong Login details');
        }
    }

    public function doLogout(){
        Auth::logout();
        return redirect()->route('user.login')->with('success', 'Logged out.');
    }
}
