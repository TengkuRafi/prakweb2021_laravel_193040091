<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Tengku Rafi',
        //     'email' => 'tengku745@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Yasep',
        //     'email' => 'yasep@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
       
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet. Nam, eius ad sit dolore aspernatur odio atque pariatur dolorem culpa blanditiis et laborum, ducimus velit, porro sunt dolor perspiciatis. Consectetur id praesentium possimus dolorem doloremque culpa debitis consequatur quo animi, ut voluptatum aliquam numquam quis odit voluptatem optio adipisci minima quia eaque veritatis. Accusamus, nam officia quam eum dignissimos aut. Vero, magni, eos minus nisi voluptatum ipsam veniam deleniti minima velit, suscipit nulla cupiditate dolores incidunt enim.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);
       
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet. Nam, eius ad sit dolore aspernatur odio atque pariatur dolorem culpa blanditiis et laborum, ducimus velit, porro sunt dolor perspiciatis. Consectetur id praesentium possimus dolorem doloremque culpa debitis consequatur quo animi, ut voluptatum aliquam numquam quis odit voluptatem optio adipisci minima quia eaque veritatis. Accusamus, nam officia quam eum dignissimos aut. Vero, magni, eos minus nisi voluptatum ipsam veniam deleniti minima velit, suscipit nulla cupiditate dolores incidunt enim.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet. Nam, eius ad sit dolore aspernatur odio atque pariatur dolorem culpa blanditiis et laborum, ducimus velit, porro sunt dolor perspiciatis. Consectetur id praesentium possimus dolorem doloremque culpa debitis consequatur quo animi, ut voluptatum aliquam numquam quis odit voluptatem optio adipisci minima quia eaque veritatis. Accusamus, nam officia quam eum dignissimos aut. Vero, magni, eos minus nisi voluptatum ipsam veniam deleniti minima velit, suscipit nulla cupiditate dolores incidunt enim.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos vel aperiam fugiat natus minima repellat odit tenetur, nam nihil aut explicabo, voluptatem cupiditate enim, quasi dolor deserunt facilis expedita commodi facere amet. Nam, eius ad sit dolore aspernatur odio atque pariatur dolorem culpa blanditiis et laborum, ducimus velit, porro sunt dolor perspiciatis. Consectetur id praesentium possimus dolorem doloremque culpa debitis consequatur quo animi, ut voluptatum aliquam numquam quis odit voluptatem optio adipisci minima quia eaque veritatis. Accusamus, nam officia quam eum dignissimos aut. Vero, magni, eos minus nisi voluptatum ipsam veniam deleniti minima velit, suscipit nulla cupiditate dolores incidunt enim.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

    }
}
