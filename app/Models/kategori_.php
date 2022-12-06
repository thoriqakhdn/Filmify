<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class kategori //extends Model
{
    // use HasFactory;

    private static $kategori_posts = [
        [
            "title" => "Action",
            "slug" => "Action"
        ],
        [
            "title" => "Drama",
            "slug" => "Drama"
        ],
        [
            "title" => "Horror",
            "slug" => "Horror"
        ],
        [
            "title" => "Romance",
            "slug" => "Romance"
        ],
        [
            "title" => "Comedy",
            "slug" => "Comedy"
        ],
        [
            "title" => "Hentai",
            "slug" => "Hentai"
        ]
    ];

    private static $movies_post = [
        [
            "title" => "Smile",
            "kategori" => "Horror",
            "slug" => "smile"
        ],
        [
            "title" => "The Medium",
            "kategori" => "Horror",
            "slug" => "the-medium"
        ],
        [
            "title" => "Stranger Things",
            "kategori" => "Horror",
            "slug" => "stranger-things"
        ],
        [
            "title" => "Reconjuring",
            "kategori" => "Horror",
            "slug" => "reconjuring"
        ],
        [
            "title" => "Batman",
            "kategori" => "Action",
            "slug" => "batman"
        ],
        [
            "title" => "Spiderman: into the spiderverse",
            "kategori" => "Action",
            "slug" => "spiderman-into-the-spiderverse"
        ]
    ];

    public static function all()
    {
        return collect(self::$kategori_posts);
    }

    public static function find($slug)
    {
        $movies = collect(self::$movies_post);
        // $movie = [];

        // foreach ($movies as $m) {
        //     if ($m["slug" === $slug]) {
        //         $movie = $m;
        //     }
        // }
        // return $movie;
        // return $movies->first();
        return $movies->Where('kategori', $slug);
    }
}
