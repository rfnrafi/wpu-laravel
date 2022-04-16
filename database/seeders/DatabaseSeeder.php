<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            "name" => "Rafi Fadhul Nusywan",
            "email" => "rfn.rafi@gmail.com",
            "password" => bcrypt("rafi123"),
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);
        Category::create([
            "name" => "Web Programing",
            "slug" => "web-programing",
        ]);
        User::factory(20)->create();
        Post::factory(100)->create();
    }
}
