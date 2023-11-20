<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
// use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = []; // Replace this with your movie data retrieval logic

        return view('index', ['movies' => $movies]);
    }
}
