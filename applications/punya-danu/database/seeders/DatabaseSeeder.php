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
        //     'name' => 'Danu Mardiko',
        //     'email' => 'danumardiko123@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        
        // User::create([
        //     'name' => 'Gunawan',
        //     'email' => 'gunawan123@gmail.com',
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

        Post::factory(20) ->create();

 
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'body' => 'vitae molestias mollitia est incidunt consectetur error aliquid repellat doloremque sunt itaque obcaecati 
        //     nemo magni quidem recusandae ipsa tempora non similique praesentium voluptate quis harum. Mollitia 
        //     reprehenderit iste, provident explicabo deleniti dolores illum in ipsa omnis. Explicabo veniam, voluptatem 
        //     adipisci suscipit dignissimos repudiandae nulla, quos perspiciatis fugit impedit tempore nisi in eius non
        //     reprehenderit quam aliquid consectetur ad esse. Dolorum quidem tempore at. Fugit rerum commodi dicta 
        //     dignissimos adipisci! Cum assumenda repudiandae officiis nesciunt mollitia beatae velit placeat doloremque 
        //     nostrum ea laborum consequuntur deserunt libero sapiente repellat ad sunt, quas nihil minima? Sed quia aut 
        //     eaque ab blanditiis unde necessitatibus aperiam laborum quisquam impedit animi eum quidem est voluptatibus, 
        //     dolore maiores. Dolorum aliquid cumque reiciendis.',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]) ;

        
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'body' => 'vitae molestias mollitia est incidunt consectetur error aliquid repellat doloremque sunt itaque obcaecati 
        //     nemo magni quidem recusandae ipsa tempora non similique praesentium voluptate quis harum. Mollitia 
        //     reprehenderit iste, provident explicabo deleniti dolores illum in ipsa omnis. Explicabo veniam, voluptatem 
        //     adipisci suscipit dignissimos repudiandae nulla, quos perspiciatis fugit impedit tempore nisi in eius non
        //     reprehenderit quam aliquid consectetur ad esse. Dolorum quidem tempore at. Fugit rerum commodi dicta 
        //     dignissimos adipisci! Cum assumenda repudiandae officiis nesciunt mollitia beatae velit placeat doloremque 
        //     nostrum ea laborum consequuntur deserunt libero sapiente repellat ad sunt, quas nihil minima? Sed quia aut 
        //     eaque ab blanditiis unde necessitatibus aperiam laborum quisquam impedit animi eum quidem est voluptatibus, 
        //     dolore maiores. Dolorum aliquid cumque reiciendis.',

        //     'category_id' => 1,
        //     'user_id' => 1
        // ]) ;


        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'body' => 'vitae molestias mollitia est incidunt consectetur error aliquid repellat doloremque sunt itaque obcaecati 
        //     nemo magni quidem recusandae ipsa tempora non similique praesentium voluptate quis harum. Mollitia 
        //     reprehenderit iste, provident explicabo deleniti dolores illum in ipsa omnis. Explicabo veniam, voluptatem 
        //     adipisci suscipit dignissimos repudiandae nulla, quos perspiciatis fugit impedit tempore nisi in eius non
        //     reprehenderit quam aliquid consectetur ad esse. Dolorum quidem tempore at. Fugit rerum commodi dicta 
        //     dignissimos adipisci! Cum assumenda repudiandae officiis nesciunt mollitia beatae velit placeat doloremque 
        //     nostrum ea laborum consequuntur deserunt libero sapiente repellat ad sunt, quas nihil minima? Sed quia aut 
        //     eaque ab blanditiis unde necessitatibus aperiam laborum quisquam impedit animi eum quidem est voluptatibus, 
        //     dolore maiores. Dolorum aliquid cumque reiciendis.',

        //     'category_id' => 2,
        //     'user_id' => 1
        // ]) ;


        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum minima suscipit doloremque d
        //     ucimus nostrum itaque nam nihil maxime inventore illo. Blanditiis cumque beatae nostrum ut a quam in, 
        //     consectetur vero necessitatibus quas. Unde sequi animi,',
        //     'body' => 'vitae molestias mollitia est incidunt consectetur error aliquid repellat doloremque sunt itaque obcaecati 
        //     nemo magni quidem recusandae ipsa tempora non similique praesentium voluptate quis harum. Mollitia 
        //     reprehenderit iste, provident explicabo deleniti dolores illum in ipsa omnis. Explicabo veniam, voluptatem 
        //     adipisci suscipit dignissimos repudiandae nulla, quos perspiciatis fugit impedit tempore nisi in eius non
        //     reprehenderit quam aliquid consectetur ad esse. Dolorum quidem tempore at. Fugit rerum commodi dicta 
        //     dignissimos adipisci! Cum assumenda repudiandae officiis nesciunt mollitia beatae velit placeat doloremque 
        //     nostrum ea laborum consequuntur deserunt libero sapiente repellat ad sunt, quas nihil minima? Sed quia aut 
        //     eaque ab blanditiis unde necessitatibus aperiam laborum quisquam impedit animi eum quidem est voluptatibus, 
        //     dolore maiores. Dolorum aliquid cumque reiciendis.',

        //     'category_id' => 2,
        //     'user_id' => 2
        // ]) ;
    }
}
