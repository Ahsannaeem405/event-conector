<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageTiming;
use App\Models\Restaurant;
use App\Models\Category;

class userController extends Controller
{
    public function index()
    {
        $catgs = Category::all()->chunk(4);
        // dd($catgs);
        $rests = Restaurant::all();
        $pkgs = Package::all();
         return view('/index', compact('catgs','rests','pkgs'));
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
