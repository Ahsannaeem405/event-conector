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
    public $package;

    public function __construct(Package $package)
    {
        $this->package = $package;
    }

    public function search(Request $request)
    {

        $resturents=Restaurant::inRandomOrder()->limit(3)->get();

        $price = $request->price ? $request->price : '$100 - $500';
        $price = $this->package->amountExplode($price);

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


        $packages = Package::whereHas('resturent', function ($q) use ($request) {
            $q->when($request->location, function ($q) use ($request) {
                //address
                $q->where('address', 'like', '%' . $request->location . '%');
            });
            //category
            $q->when($request->category, function ($q) use ($request) {

                $q->whereCategoryid($request->category);
            });

        })
            //persons
            ->when($request->person, function ($q) use ($request) {

                $q->where('mem_allow', '>=', $request->person);

            })
            //price range
            ->when($price, function ($q) use ($price) {

                $q->where('amount', '>=', $price['min'] );
                $q->where('amount', '<=', $price['max'] );

            })
            //keywords
            ->when($request->keywords, function ($q) use ($request) {

                $q->where('pkg_name', 'like', '%' . $request->keywords . '%');
                $q->ORwhere('desc', 'like', '%' . $request->keywords . '%');
            })
            //tags
            ->when($request->tagsarray, function ($q) use ($request) {

                $q->whereHas('tags', function ($q) use ($request) {

                    $q->whereIn('tag', $request->tagsarray);
                });
            })
            ->when($request->search_time, function ($q) use ($request, $weekOpen, $weekClose) {
                $q->whereHas('pkgtime', function ($q) use ($weekOpen, $request, $weekClose) {
                    $q->whereTime($weekOpen, '<=', $request->search_time)
                        ->whereTime($weekClose, '>=', $request->search_time);
                });
            })

            ->when($request->sort_by, function ($q) use ($request) {
//dd(1);
                if ($request->sort_by==1)
                {
                    $q->orderBy('id','DESC');
                }
                if ($request->sort_by==2)
                {
                    $q->orderBy('amount','ASC');
                }
                if ($request->sort_by==3)
                {
                    $q->orderBy('amount','DESC');
                }
                if ($request->sort_by==4)
                {

                }
                if ($request->sort_by==5)
                {

                }

            })
            ->get();

        $category = Category::all();

        $tags = PackageTags::select('*', \DB::raw('COUNT(tag) as tagdata'))
            ->groupBy('tag')
            ->orderBy('tagdata', 'DESC')
            ->take(5)
            ->get();


        return view('featured_rest', compact('packages', 'price','category', 'request', 'tags','resturents'));

    }
}

