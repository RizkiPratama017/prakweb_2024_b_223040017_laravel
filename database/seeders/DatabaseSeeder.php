<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create()([
        //     'name' => 'Web Design',
        //     'slug' => 'Web-Design',
        // ]);

        // Post::create()([
        //     'title' => 'Judul Artikel 1',
        //     "author_id" => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione cupiditate tenetur ipsam fuga possimus ab voluptatum amet culpa, obcaecati quisquam quas nam. Nemo animi laboriosam blanditiis culpa ipsum veniam distinctio.'
        // ]);


        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
