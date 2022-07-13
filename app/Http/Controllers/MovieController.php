<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movie;

class MovieController extends Controller

{
    public function index(){
        $movie = Movie::all();

        return view('home', compact('movie'));
    }
}
