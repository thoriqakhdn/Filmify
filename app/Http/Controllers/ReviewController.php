<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReviewRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        if (Auth::check()) {

            $validator = Validator::make($request->all(), [
                'body' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('message', 'Area review dibutuhkan');
            }

            $movie = Movies::where('slug', $request->movies_slug)->first();
            if (!$movie) {
                return redirect()->back()->with('message', 'Movie tidak ditemukan');
            }

            $movie->increment('reviews');

            Review::create([
                'user_id' => Auth::user()->id,
                'movie_id' => $movie->id,
                'body' => $request->body,
                'like' => 0
            ]);

            return redirect()->back()->with('message', 'Review berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Review gagal');
        }
    }
}
