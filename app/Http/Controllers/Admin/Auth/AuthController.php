<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login()
    {
        return view('admin.auth.login');
    }

    function postLogin(Request $request)
    {
        dd($request->all());
    }
}
