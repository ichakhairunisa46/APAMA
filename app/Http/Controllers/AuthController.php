<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {

    }

    public function loginPost(Request $request)
    {

    }

    public function profile()
    {
        return view('auth.profile');
    }
}
