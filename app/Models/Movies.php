<?php

namespace App\Models;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movies extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'kategori', 'excerpt', 'body', 'rating', 'upvote', 'slug'];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(kategori::class);
    }
}
// Menggunakan php artisan tinker
// // Input data
// Movies::create([
//     'title' => 'Spiderman: into the spiderverse',
//     'category_id' => '2',
//     'body' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man. Ketika dia bertemu Peter Parker, dia segera menyadari bahwa ada banyak orang lain yang memiliki bakat istimewa dan terbang tinggi yang sama dengannya. Miles sekarang harus menggunakan keterampilan barunya untuk melawan Kingpin yang jahat, orang gila raksasa yang dapat membuka portal ke alam semesta lain dan menarik berbagai versi Spider-Man ke dunia kita.',
//     'slug' => 'spiderman-into-the-spiderverse',
//     'rating' => 4.8,
//     'upvote' => 0,
//     'excerpt' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man.'
// ]);
// Movies::create([
//     'title' => 'Smile',
//     'category_id' => '4',
//     'body' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man. Ketika dia bertemu Peter Parker, dia segera menyadari bahwa ada banyak orang lain yang memiliki bakat istimewa dan terbang tinggi yang sama dengannya. Miles sekarang harus menggunakan keterampilan barunya untuk melawan Kingpin yang jahat, orang gila raksasa yang dapat membuka portal ke alam semesta lain dan menarik berbagai versi Spider-Man ke dunia kita.',
//     'slug' => 'smile',
//     'rating' => 4.5,
//     'upvote' => 0,
//     'excerpt' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man.'
// ]);
// Mengubah data berdasarkan id ( update )
// Movies::find(1)->update([
//     'title' => 'Spiderman: into the spiderverse',
//     'category_id' => '2',
//     'body' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man. Ketika dia bertemu Peter Parker, dia segera menyadari bahwa ada banyak orang lain yang memiliki bakat istimewa dan terbang tinggi yang sama dengannya. Miles sekarang harus menggunakan keterampilan barunya untuk melawan Kingpin yang jahat, orang gila raksasa yang dapat membuka portal ke alam semesta lain dan menarik berbagai versi Spider-Man ke dunia kita.',
//     'slug' => 'spiderman-into-the-spiderverse',
//     'rating' => 4.8 ,
//     'upvote' => 0,
//     'excerpt' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man.'
// ]);
// Mengubah data berdasarkan parameter
// Movies::where('title','Spiderman: into the spiderverse)->update([
//     'title' => 'Smile',
//     'category_id' => '2',
//     'body' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man. Ketika dia bertemu Peter Parker, dia segera menyadari bahwa ada banyak orang lain yang memiliki bakat istimewa dan terbang tinggi yang sama dengannya. Miles sekarang harus menggunakan keterampilan barunya untuk melawan Kingpin yang jahat, orang gila raksasa yang dapat membuka portal ke alam semesta lain dan menarik berbagai versi Spider-Man ke dunia kita.',
//     'slug' => 'spiderman-into-the-spiderverse',
//     'rating' => 4.8 ,
//     'upvote' => 0,
//     'excerpt' => 'Digigit laba-laba radioaktif di kereta bawah tanah, remaja Brooklyn Miles Morales tiba-tiba mengembangkan kekuatan misterius yang mengubahnya menjadi satu-satunya Spider-Man.'
// ]);