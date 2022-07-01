<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
//dd($request->all());

        $resturents = Restaurant::
        when($request->location, function ($q) use ($request) {
            $q->where('address', 'like', '%' . $request->location . '%');
        })
            ->when($request->category, function ($q) use ($request) {
                $q->whereCategoryid($request->category);
            })

            ->whereHas('package', function ($q){
               //$q->whereHas('pkgtime');
            })
            ->with('package')
            ->get();

        $category = Category::all();
        return view('featured_rest', compact('resturents', 'category'));

    }
}
