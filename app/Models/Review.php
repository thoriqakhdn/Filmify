<?php

namespace App\Models;

use App\Models\User;
use App\Models\Movies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'movie_id', 'id');
    }

    // Review::create([
    //     'user_id' => $this->user,
    //     'movie_id' => $this->movie,
    //     'body' => "test1234123",
    //     'like' => 0
    // ]);
}
