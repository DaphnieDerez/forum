<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    
    public function create(){
        return view('users.create');
    }

    public function loginForm(){
        return view('users.login');
    }
    
    public function goForbidden()
    {
        return view('user.forbidden');
    }

    public function store(Request $request){

    }
}
