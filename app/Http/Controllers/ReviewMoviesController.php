<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewMoviesController extends Controller
{
    public function index(){
        return view('reviewMovie');
    }
}
