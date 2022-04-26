<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view("register")->with(["title" => "Register"]);
    }


    // STORE NEW USER
    public function store(Request $request){

        // VALIDATE DATA
        $request->validate([
            "name" => "required",
            "username" => "required|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5",
        ]);

        User::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),

        ]);

        return redirect("/")->with("message" ,"Register success");

    }
}
