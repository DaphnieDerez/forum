<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {

            $request->user()->tokens()->delete();
            $request->session()->regenerate();

            return redirect()->route('posts.home');
        } else {
            return redirect()->route('user.login')->with('error', 'Wrong Login details');
        }
    }

    public function doLogout(Request $request){
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login')->with('success', 'Logged out.');
    }
}
