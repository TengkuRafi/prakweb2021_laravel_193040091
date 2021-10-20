<?php

namespace App\Models;



class Post 
{
    static $blog_posts =[
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
    ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);;
    }
    
}
