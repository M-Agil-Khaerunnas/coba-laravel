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
            //     'name' => 'Agiell',
            //     'email' => 'Khaerunnasagil@gmail.com',
            //     'password' => bcrypt('12345')
            // ]); 
            
            // User::create([
                //     'name' => 'Primiily',
                //     'email' => 'Primiilych@gmail.com',
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

        post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptas sapiente cumque consequuntur animi blanditiis ullam, ut voluptates qui ipsa, aliquid saepe quaerat recusandae possimus quam totam iste, harum corrupti reprehenderit? Vel repellat corrupti minima architecto enim vitae voluptatum sequi, incidunt non. Nihil mollitia facilis dignissimos libero aut molestias fuga, quod ex quis explicabo in, soluta quibusdam id, reiciendis culpa. Neque debitis cumque adipisci animi vitae. Perspiciatis accusantium minus consectetur, laborum voluptatem minima recusandae nostrum, temporibus aperiam quisquam corporis. Iusto impedit, quo velit minus quod officiis alias explicabo unde placeat, ratione minima! Excepturi illo consequatur officia illum quae ex recusandae exercitationem nisi iste quibusdam! Eum suscipit explicabo neque modi numquam inventore corrupti in cum, quisquam laboriosam a, illum nostrum rem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptas sapiente cumque consequuntur animi blanditiis ullam, ut voluptates qui ipsa, aliquid saepe quaerat recusandae possimus quam totam iste, harum corrupti reprehenderit? Vel repellat corrupti minima architecto enim vitae voluptatum sequi, incidunt non. Nihil mollitia facilis dignissimos libero aut molestias fuga, quod ex quis explicabo in, soluta quibusdam id, reiciendis culpa. Neque debitis cumque adipisci animi vitae. Perspiciatis accusantium minus consectetur, laborum voluptatem minima recusandae nostrum, temporibus aperiam quisquam corporis. Iusto impedit, quo velit minus quod officiis alias explicabo unde placeat, ratione minima! Excepturi illo consequatur officia illum quae ex recusandae exercitationem nisi iste quibusdam! Eum suscipit explicabo neque modi numquam inventore corrupti in cum, quisquam laboriosam a, illum nostrum rem.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptas sapiente cumque consequuntur animi blanditiis ullam, ut voluptates qui ipsa, aliquid saepe quaerat recusandae possimus quam totam iste, harum corrupti reprehenderit? Vel repellat corrupti minima architecto enim vitae voluptatum sequi, incidunt non. Nihil mollitia facilis dignissimos libero aut molestias fuga, quod ex quis explicabo in, soluta quibusdam id, reiciendis culpa. Neque debitis cumque adipisci animi vitae. Perspiciatis accusantium minus consectetur, laborum voluptatem minima recusandae nostrum, temporibus aperiam quisquam corporis. Iusto impedit, quo velit minus quod officiis alias explicabo unde placeat, ratione minima! Excepturi illo consequatur officia illum quae ex recusandae exercitationem nisi iste quibusdam! Eum suscipit explicabo neque modi numquam inventore corrupti in cum, quisquam laboriosam a, illum nostrum rem.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias voluptas sapiente cumque consequuntur animi blanditiis ullam, ut voluptates qui ipsa, aliquid saepe quaerat recusandae possimus quam totam iste, harum corrupti reprehenderit? Vel repellat corrupti minima architecto enim vitae voluptatum sequi, incidunt non. Nihil mollitia facilis dignissimos libero aut molestias fuga, quod ex quis explicabo in, soluta quibusdam id, reiciendis culpa. Neque debitis cumque adipisci animi vitae. Perspiciatis accusantium minus consectetur, laborum voluptatem minima recusandae nostrum, temporibus aperiam quisquam corporis. Iusto impedit, quo velit minus quod officiis alias explicabo unde placeat, ratione minima! Excepturi illo consequatur officia illum quae ex recusandae exercitationem nisi iste quibusdam! Eum suscipit explicabo neque modi numquam inventore corrupti in cum, quisquam laboriosam a, illum nostrum rem.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
