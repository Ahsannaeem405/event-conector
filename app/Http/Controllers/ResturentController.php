<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class ResturentController extends Controller
{
    public function index(){
        $resturents=Restaurant::OrderBY('id','DESC')->get();
        return view('admin.resturent.index',compact('resturents'));
    }
}
