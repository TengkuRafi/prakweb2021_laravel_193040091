<?php

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
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Tengku Muhammad Rafi",
        "email" => "tengku745@gmail.com",
        "image" => "gampah.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tengku Muhammad Rafi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sapiente ratione porro eaque, expedita quaerat, in architecto assumenda illo rerum fugiat.
             Eos ipsam natus dolorem dolor odit doloribus porro delectus perferendis aliquid, iure possimus ad laudantium consequatur molestiae, minima praesentium? Esse adipisci eius accusantium ex facere autem placeat culpa,
            temporibus nisi excepturi voluptatem labore aliquam iusto corrupti veritatis impedit vitae illo. Maxime, impedit temporibus dolores, aperiam accusantium magnam maiores voluptate tempora,
            porro laborum voluptates sapiente consectetur earum eos quibusdam veniam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "UYE",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, illo accusamus iusto unde rerum enim sit temporibus eaque iure veritatis debitis aliquam optio recusandae.
            Dolorem sequi laboriosam molestias ex a, explicabo neque laudantium necessitatibus ad eius distinctio iusto debitis consequatur corrupti rerum accusamus amet? Labore,
            soluta minima? Doloremque, maxime consequuntur."
        ],
    ];

    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



//halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tengku Muhammad Rafi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sapiente ratione porro eaque, expedita quaerat, in architecto assumenda illo rerum fugiat.
             Eos ipsam natus dolorem dolor odit doloribus porro delectus perferendis aliquid, iure possimus ad laudantium consequatur molestiae, minima praesentium? Esse adipisci eius accusantium ex facere autem placeat culpa,
            temporibus nisi excepturi voluptatem labore aliquam iusto corrupti veritatis impedit vitae illo. Maxime, impedit temporibus dolores, aperiam accusantium magnam maiores voluptate tempora,
            porro laborum voluptates sapiente consectetur earum eos quibusdam veniam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "UYE",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, illo accusamus iusto unde rerum enim sit temporibus eaque iure veritatis debitis aliquam optio recusandae.
            Dolorem sequi laboriosam molestias ex a, explicabo neque laudantium necessitatibus ad eius distinctio iusto debitis consequatur corrupti rerum accusamus amet? Labore,
            soluta minima? Doloremque, maxime consequuntur."
        ],
    ];
    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view ('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});