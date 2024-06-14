<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function cekLogin(Request $request)
    {
        if(Auth::attempt([
                    'email' => $request->email,
                    'password' => $request->password]))
        {
            return redirect("/home");
        }
        else
        {
            return redirect("/");
        }
    }

    public function cekLogout()
    {
        Auth::logout();
        return redirect("/");
    }
}
