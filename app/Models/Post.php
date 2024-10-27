<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Rizki Pratama',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur eligendi quia adipisci neque fuga necessitatibus quisquam maiores cum iusto! Debitis et alias neque earum vero odit ratione eum id?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Rizki Pratama',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod beatae tempore facere aut modi rerum, quis est commodi minima vitae nisi ipsa a accusantium dolores aliquid ex pariatur perspiciatis harum.'
            ]
        ];
    }

    public static function find($slug): array
    {
        //callback
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        //arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
