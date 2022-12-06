<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function post()
    {
        return $this->hasMany(Movies::class);
    }
}

// kategori::create([
//     'title' => 'Horror',
//     'slug' => 'Horror',
// ]);
