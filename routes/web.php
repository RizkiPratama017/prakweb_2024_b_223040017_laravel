<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rizki Pratama', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
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
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
