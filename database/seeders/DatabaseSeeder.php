<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rahmalia Nuursyabaani',
            'username' => 'rahmalia',
            'email' => 'rahma@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Bunga Fajrin',
        //     'email' => 'bunga@gmail.com',
        //     'password' => bcrypt('54321')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatum cupiditate inventore iure ea pariatur similique animi optio possimus repudiandae, eius, aut iusto ipsa. Porro temporibus consequatur a ipsum commodi ab dolorum. Modi, incidunt temporibus earum error tempora fugit, mollitia voluptates odio nemo ad at vel dolorem inventore perspiciatis ullam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatum cupiditate inventore iure ea pariatur similique animi optio possimus repudiandae, eius, aut iusto ipsa. Porro temporibus consequatur a ipsum commodi ab dolorum. Modi, incidunt temporibus earum error tempora fugit, mollitia voluptates odio nemo ad at vel dolorem inventore perspiciatis ullam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatum cupiditate inventore iure ea pariatur similique animi optio possimus repudiandae, eius, aut iusto ipsa. Porro temporibus consequatur a ipsum commodi ab dolorum. Modi, incidunt temporibus earum error tempora fugit, mollitia voluptates odio nemo ad at vel dolorem inventore perspiciatis ullam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quia sint nulla iusto laudantium, delectus excepturi minus obcaecati necessitatibus dignissimos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatum cupiditate inventore iure ea pariatur similique animi optio possimus repudiandae, eius, aut iusto ipsa. Porro temporibus consequatur a ipsum commodi ab dolorum. Modi, incidunt temporibus earum error tempora fugit, mollitia voluptates odio nemo ad at vel dolorem inventore perspiciatis ullam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
