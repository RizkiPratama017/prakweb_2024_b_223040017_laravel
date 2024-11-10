<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UnsplashService
{
    protected $baseUrl = 'https://api.unsplash.com/';

    public function getRandomPhoto($query)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Client-ID ' . env('UNSPLASH_ACCESS_KEY'),
        ])->get($this->baseUrl . 'photos/random', [
            'query' => $query,
            'orientation' => 'landscape',
        ]);

        return $response->json();
    }
}
