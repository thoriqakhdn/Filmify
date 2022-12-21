<?php

namespace App\Models;

use App\Models\Review;
use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movies extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(kategori::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'movie_id', 'id');
    }
}
