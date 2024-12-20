<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    //
    public function getMoviesByGenre()
{
    $movies = DB::table('Movies')
        ->select('Genre', 'Title', 'Small_Thumbnail_Url')
        ->orderBy('Genre')
        ->get()
        ->groupBy('Genre');
    
    return Inertia::render('Welcome', [
        'moviesByGenre' => $movies
    ]);
}

public function Random() {
    $randomContent = DB::table('Movies')
        ->select('Title', 'Description', 'Big_Thumbnail_Url')
        ->inRandomOrder()
        ->first();

    return Inertia::render('movies_show', [
        'randomContent' => $randomContent
    ]);
}


}
