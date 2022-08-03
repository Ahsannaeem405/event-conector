<?php

namespace App\Http\Controllers;

use App\Events\BraodCast;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageTiming;
use App\Models\Restaurant;
use App\Models\Category;
use DB;

class userController extends Controller
{
    public function index()
    {


        $catgs = Category::all()->chunk(4);
        $category = Category::all();
        // dd($catgs);
        $rests = DB::table('restaurants')->take(3)->orderBy('id', 'desc')->get();
        $pkgs = Package::all()->chunk(3);
        return view('index', compact('catgs', 'rests', 'pkgs', 'category'));
    }

    public function featured_rest()
    {
        return view('/featured_rest');
    }

    public function chatBoard()
    {
        return view('/chatBoard');
    }
    // public function favourites()
    // {
    //     return view('/favourites');
    // }

}
