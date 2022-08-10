<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ResturentController extends Controller
{
    public function index(){
        $resturents=Restaurant::OrderBY('id','DESC')->get();
        return view('admin.resturent.index',compact('resturents'));
    }

    public function delete($id){
        $resturent=Restaurant::findOrFail($id)->delete();

        if ($resturent){
            return back()->with('success','Restaurant deleted successfully');
        }
    }

    public function all_packages($id){
        $id=decrypt($id);
        $packages=Package::whereRestaurantId($id)->get();

        return view('host.package.list',compact('packages'));

    }
}
