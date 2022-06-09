<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
         return view('/index');
    }
    public function featured_rest()
    {
        return view('/featured_rest');
    }
    public function chatBoard()
    {
        return view('/chatBoard');
    }
    public function favourites()
    {
        return view('/favourites');
    }
    
}
