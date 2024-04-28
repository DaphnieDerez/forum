<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        return view('users.index');
    }
    
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:7|max:255',
        ]);

        User::create($request->all());
        return redirect()->route('/')->with('success', 'Account
created successfully.');

    }
}
