<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Movies $movie)
    {
        return view('Home', [
            "title" => "Home",
            'films' => $movie::orderBy('created_at', 'desc')->take(8)->get(),
            'films2' => $movie::orderBy('reviews', 'desc')->take(8)->get()
        ]);
    }

    public function upvote(Request $request)
    {
        $vote = $request->validate([
            'title' => 'required|min:2|max:255'
        ]);
        if ($vote && Movies::where('title', 'LIKE', '%' . $request['title'] . '%')->exists()) {
            Movies::where('title', 'LIKE', '%' . $request['title'] . '%')->increment('upvote');
            return redirect('/Home')->with('success', 'Rekomendasi Berhasil!');
        }
        return redirect('/Home')->with('fail', 'Rekomendasi Gagal!');
    }
}
