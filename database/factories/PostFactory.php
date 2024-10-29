<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'author_id' => User::factory(),
            'slug' => Str::slug($this->faker->sentence()),
            'body' => $this->faker->text(),
        ];
    }
}
