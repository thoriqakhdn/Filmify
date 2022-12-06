<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\Movies;

class KategoriController extends Controller
{
    //
    public function index()
    {
        return view('Kategori', [
            "title" => "Kategori",
            "kategoris" => kategori::all()
        ]);
    }

    // public function show($kategori)
    // {
    //     $allfilms = Movies::where('kategori', $kategori)->get();
    //     @dd($allfilms);
    //     return view('1kategori', [
    //         'title' => "Kategori",
    //         'films' => $kategori->movies,
    //         'kategori'
    //     ]);
    // }
}
