<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // LOGIN FORM
    public function index(){
        return view("login")->with(["title"=>"LOGIN"]);
    }

    // LOGIN THE USER
    public function authenticate(Request $request){
        $credentials = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended("/");
        }

        return back()->withErrors(["login-failed"=>"EMAIL OR PASSWORD WRONG"]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");

    }
}
