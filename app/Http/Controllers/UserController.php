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
        
    }
}
