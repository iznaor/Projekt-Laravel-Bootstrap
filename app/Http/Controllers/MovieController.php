<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('movies.index',compact('movies'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moviesAdd.create');
        return view('moviesEdit.edit');
        return view('moviesEdit.update');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request -> all();
        Movie::create($input);
        return  redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $movie = Movie::find($movie);
        return  view('moviesEdit.edit');
        $movie->movie_title=$input['movie_title'];
        $movie->movie_title=$input['movie_release_year'];
        $movie->movie_title=$input['movie_runtime_minutes'];
        $movie->movie_title=$input['imdb_rating'];
        $movie->movie_title=$input['metascore_rating'];
        $movie->save();
        return  redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $input = $request -> all();
        $movie = Movie::find($movie);
        $movie->movie_title=$input['movie_title'];
        $movie->movie_title=$input['movie_release_year'];
        $movie->movie_title=$input['movie_runtime_minutes'];
        $movie->movie_title=$input['imdb_rating'];
        $movie->movie_title=$input['metascore_rating'];


        $movie->save();
        return  redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        return redirect()->back();
    }
    


}
