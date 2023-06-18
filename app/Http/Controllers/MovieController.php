<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index')->with('movies', Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function filter(Request $request)
    {
        $request->validate([
            'gender' => ['required']
        ]);

        return response()->json(Movie::where('gender', $request->gender)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'year' => ['required'],
            'gender' => ['required'],
            'description' => ['required'],
            'poster' => ['required'],
        ]);

        Movie::create($data);

        return response()->json(['message' => '¡Pelicula creado!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movie')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
