<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // Pembuatan User / Author
        User::create([
            'name' => 'Eri Maulana',
            'email' => 'eri@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Putri Narila',
            'email' => 'putri@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // Pembuatan Category
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Pembuatan data posts
        Post::create([
            'title' => 'Post Ke Satu',
            'category_id' => 1,
            'slug' => 'post-ke-satu',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Post Ke Dua',
            'category_id' => 1,
            'slug' => 'post-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Post Ke Tiga',
            'category_id' => 2,
            'slug' => 'post-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Post Ke Empat',
            'category_id' => 3,
            'slug' => 'post-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit tenetur officia saepe impedit iste laborum nihil quaerat voluptatum itaque pariatur ad tempore est omnis veritatis inventore repellat, explicabo eum quas!</p><p> Enim itaque cum ab eos, voluptatem neque laborum doloremque rerum obcaecati quod veritatis ratione autem labore, reiciendis odio alias fugit velit expedita facilis! Quia quibusdam libero consectetur quasi nostrum asperiores architecto quaerat aut, dignissimos quas, id sequi sunt officiis culpa nemo sit eius sint inventore!</p><p> Eum aperiam veniam natus voluptatibus error. Voluptatum a assumenda numquam perspiciatis sed reiciendis minus, totam beatae, voluptas dolorum consectetur, iure veniam aliquid facilis dolores animi esse. Labore omnis error architecto quasi laborum! Itaque magni necessitatibus fugit inventore recusandae accusantium ipsum labore libero optio excepturi?</p>',
            'user_id' => 2
        ]);
    }
}