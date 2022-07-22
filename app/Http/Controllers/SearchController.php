<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\PackageTags;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $weekOpen = [
            0 => 'sundyopen',
            1 => 'mondyopen',
            2 => 'tuedyopen',
            3 => 'wedopen',
            4 => 'thurdyopen',
            5 => 'fridyopen',
            6 => 'satdyopen',
        ];
        $weekClose = [
            0 => 'sundyclose',
            1 => 'mondyclose',
            2 => 'tuedyclose',
            3 => 'wedclose',
            4 => 'thurdyclose',
            5 => 'fridyclose',
            6 => 'satdyclose',
        ];
        $date = Carbon::parse($request->search_date)->format('Y-m-d');
        $dayOfTheWeek = Carbon::createFromFormat('Y-m-d', $date)->dayOfWeek;
        $weekOpen = $weekOpen[$dayOfTheWeek];
        $weekClose = $weekClose[$dayOfTheWeek];


        $packages=Package::whereHas('resturent', function ($q) use ($request) {
           $q->when($request->location, function ($q) use ($request) {
//address
                $q->where('address', 'like', '%' . $request->location . '%');
            });
           //category
               $q->when($request->category, function ($q) use ($request) {

                $q->whereCategoryid($request->category);
            });

        })
//keywords
         ->when($request->keywords, function ($q) use ($request) {

                   $q->where('pkg_name', 'like', '%' . $request->keywords . '%');
                   $q->ORwhere('desc', 'like', '%' . $request->keywords . '%');
               })

            //tags

            ->when($request->tagsarray, function ($q) use ($request) {

                $q->whereHas('tags', function ($q) use ($request) {

                    $q->whereIn('tag',$request->tagsarray);
                });
               })

            ->when($request->search_time,function ($q) use ($request,$weekOpen,$weekClose){
              $q->whereHas('pkgtime', function ($q) use ($weekOpen,$request,$weekClose) {
                  $q->whereTime($weekOpen,'<=',$request->search_time)
                      ->whereTime($weekClose,'>=',$request->search_time);
              });
          })


            ->get();



        $category = Category::all();

        $tags=PackageTags::select('*',\DB::raw('COUNT(tag) as tagdata'))
            ->groupBy('tag')
            ->orderBy('tagdata','DESC')
            ->take(5)
            ->get();



        return view('featured_rest', compact('packages', 'category','request','tags'));

    }
}

