<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME ROUTE
Route::get('/', function () {
    return view('index')->with(["title" => "Tampilan awal"]);
});

// DASHBOARD ROUTE
Route::get("/dashboard",[DashboardController::class,"index"])->middleware("auth");
Route::get("/dashboard/create-post",[DashboardController::class,"createPost"])->middleware("auth");

// POST ROUTE
Route::get("/posts" ,[PostsController::class , "index"]);
Route::post("/posts" ,[PostsController::class , "store"]);
Route::get("/posts/{post:slug}" ,[PostsController::class , "show"]);

// LOGIN ROUTE
Route::post("/login",[LoginController::class,"authenticate"]);
Route::get("/login",[LoginController::class, "index"])->name("login")->middleware("guest");

// LOGOUT
Route::get("/logout",[LoginController::class,"logout"]);

// REGISTER ROUTE
Route::get("/register",[UsersController::class,"index"]);
Route::post("/register",[UsersController::class, "store"]);

// USER ROUTE
Route::get("/{user:username}",function(User $user){
    return view("users.single")->with([
        "title" => "profile of $user->name",
        "user" => $user,
    ]);
});


// CATEGORY ROUTE
Route::get("/categories/{category:slug}",function(Category $category){
    return view("posts.index")->with([
        "title" => "$category->name",
        "sub_title" => "All Posts of " . $category->name,
        "posts" => $category->post
    ]);
});
