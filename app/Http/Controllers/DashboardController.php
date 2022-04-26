<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("dashboard.main")->with(["title" => "DASHBOARD"]);
    }

    // METHOD TO CREATE A POST
    public function createPost(){
        return view("dashboard.post")->with(["title"=>"Create a Post"])->with(["categories" => Category::all()]);
    }
}
