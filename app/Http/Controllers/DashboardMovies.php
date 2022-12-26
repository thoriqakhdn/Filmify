<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\kategori;
use Illuminate\Http\Request;

class DashboardMovies extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.movie.index', [
            "title" => "Dashboard",
            "movies" => Movies::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.movie.create', [
            'kategoris' => kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateddata = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255|unique:movies',
            'body' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'rating' => 'required',
            'kategori_id' => 'required',
            'studio' => 'required',
            'actor' => 'required',
            'rilis' => 'required',
            'photo' => 'required',
        ]);

        Movies::create($validateddata);
        return redirect('Dashboard/movie')->with('success', 'Movie berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movies $movie)
    {
        //
        Movies::destroy($movie->id);
        return redirect('Dashboard/movie')->with('success', 'Movie berhasil dihapus');
    }
}
