<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('index')->with(["title" => "Tampilan awal"]);
});

Route::get("/posts" ,[PostsController::class , "index"]);
Route::get("/posts/{post:slug}" ,[PostsController::class , "show"]);

Route::get("/{user:name}",function(User $user){
    return view("users.single")->with([
        "title" => "profile of $user->name",
        "user" => $user,
    ]);
});

Route::get("/categories/{category:slug}",function(Category $category){
    return view("categories.index")->with([
        "title" => "$category->name",
        "category" => $category
    ]);
});
