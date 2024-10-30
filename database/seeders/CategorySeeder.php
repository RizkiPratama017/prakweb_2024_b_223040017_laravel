<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'mechine-learning'
        ]);
        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure'
        ]);
        Category::create([
            'name' => 'Data Warehouse',
            'slug' => 'data-warehouse'
        ]);
    }
}
