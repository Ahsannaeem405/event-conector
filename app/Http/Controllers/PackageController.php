<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageTiming;
use App\Models\Restaurant;
use App\Models\Category;
use DB;
use Eastwest\Json\Json;
use Eastwest\Json\JsonException;

class PackageController extends Controller
{
    public function add_package(Request $request)
    {

        $pkg = new Package;
        $pkg->planner_id = auth()->user()->id;
        $pkg->restaurant_id = $request->restaurant;
        $pkg->pkg_name = $request->package;
        $pkg->mem_allow = $request->quantity;
        $pkg->price_for = $request->person;
        $pkg->amount = $request->amount;

        $files = [];
        if($request->hasfile('image'))
        {
            // dd($request->file('image'));
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('upload'), $name);
                $files[] = $name;
            }
            $pkg->logo = Json::encode($files);
        }

        if($request->_24by7 == 1 )
        {
            $pkg->availalltime = 1;
            $savepkg = $pkg->save();
        }
        else
        {
            $pkg->availalltime = 0;

            for($j = 1; $j < 8; $j++)
            {
                $holiday='holiday'.$j;
                $day24='_24_day'.$j;

                if($request->has($holiday))
                {
                    $pkg->$holiday = 1;

                }
                elseif($request->has($day24)){
                    $pkg->$holiday = 24;
                }

            }
            $savepkg = $pkg->save();
            if($request->repeatt == 1)
            {
                $maxlop = max($request->count);
                for ($i = 0; $i <= $maxlop; $i++) {
                    // echo $i;
                    $time = new PackageTiming;
                    $time->package_id =  $pkg->id;
                    if(isset($request->mondayopen[$i]))
                    {
                        $time->mondyopen = $request->mondayopen[$i];

                    }

                    if(isset($request->mondayclose[$i]))
                    {
                        $time->mondyclose = $request->mondayclose[$i];
                    }
                    if(isset($request->tuesdayopen[$i]))
                    {
                        $time->tuedyopen = $request->tuesdayopen[$i];
                    }
                    if(isset($request->tuesdayclose[$i]))
                    {
                        $time->tuedyclose = $request->tuesdayclose[$i];
                    }
                    if(isset($request->wednesdayopen[$i]))
                    {
                        $time->wedopen = $request->wednesdayopen[$i];
                    }
                    if(isset($request->wednesdayclose[$i]))
                    {
                        $time->wedclose = $request->wednesdayclose[$i];
                    }
                    if(isset($request->thursdayopen[$i]))
                    {
                        $time->thurdyopen = $request->thursdayopen[$i];
                    }
                    if(isset($request->thursdayclose[$i]))
                    {
                        $time->thurdyclose = $request->thursdayclose[$i];
                    }
                    if(isset($request->fridayopen[$i]))
                    {
                        $time->fridyopen = $request->fridayopen[$i];
                    }
                    if(isset($request->fridayclose[$i]))
                    {
                        $time->	fridyclose = $request->fridayclose[$i];
                    }
                    if(isset($request->saturdayopen[$i]))
                    {
                        $time->satdyopen = $request->saturdayopen[$i];
                    }
                    if(isset($request->saturdayclose[$i]))
                    {
                        $time->satdyclose = $request->saturdayclose[$i];
                    }

                    if(isset($request->sundayopen[$i]))
                    {
                        $time->sundyopen = $request->sundayopen[$i];
                    }
                    if(isset($request->sundayclose[$i]))
                    {
                        $time->sundyclose = $request->sundayclose[$i];
                    }

                    $time->save();

                }
            }



        }

        if($savepkg)
        {
            return redirect()->back()->with('success','Package Added Successfully');
        }
    }

    public function edit_package(Request $request)
    {
        // dd('edit package');
        $pkg = Package::find($request->id);
        $rests = Restaurant::where('planner_id', auth()->user()->id)->get();
        $catgs = Category::all();
        // dd($rest->time);
        // dd($pkg->logo);

        return view('host.package.edit_package', compact('rests', 'pkg'));

    }

    public function update_package(Request $request)
    {
        
        DB::table('package_timings')->where('package_id', $request->id)->delete();

        $pkg = Package::find($request->id);
        $pkg->restaurant_id = $request->restaurant;
        $pkg->pkg_name = $request->package;
        $pkg->mem_allow = $request->quantity;
        $pkg->price_for = $request->person;
        $pkg->amount = $request->amount;

        $files = [];
        if($request->hasfile('image'))
        {
            // dd($request->file('image'));
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('upload'), $name);
                $files[] = $name;
            }
            $pkg->logo = Json::encode($files);
        }

        if($request->_24by7 == 1 )
        {
            $pkg->availalltime = 1;
            $savepkg = $pkg->update();
        }
        else
        {
            $pkg->availalltime = 0;

            for($j = 1; $j < 8; $j++)
            {
                $holiday='holiday'.$j;
                $day24='_24_day'.$j;

                if($request->has($holiday))
                {
                    $pkg->$holiday = 1;

                }
                elseif($request->has($day24)){
                    $pkg->$holiday = 24;
                }

            }
            $savepkg = $pkg->update();
            if($request->repeatt == 1)
            {
                $maxlop = max($request->count);
                for ($i = 0; $i <= $maxlop; $i++) {
                    // echo $i;
                    $time = new PackageTiming;
                    $time->package_id =  $pkg->id;
                    if(isset($request->mondayopen[$i]))
                    {
                        $time->mondyopen = $request->mondayopen[$i];

                    }

                    if(isset($request->mondayclose[$i]))
                    {
                        $time->mondyclose = $request->mondayclose[$i];
                    }
                    if(isset($request->tuesdayopen[$i]))
                    {
                        $time->tuedyopen = $request->tuesdayopen[$i];
                    }
                    if(isset($request->tuesdayclose[$i]))
                    {
                        $time->tuedyclose = $request->tuesdayclose[$i];
                    }
                    if(isset($request->wednesdayopen[$i]))
                    {
                        $time->wedopen = $request->wednesdayopen[$i];
                    }
                    if(isset($request->wednesdayclose[$i]))
                    {
                        $time->wedclose = $request->wednesdayclose[$i];
                    }
                    if(isset($request->thursdayopen[$i]))
                    {
                        $time->thurdyopen = $request->thursdayopen[$i];
                    }
                    if(isset($request->thursdayclose[$i]))
                    {
                        $time->thurdyclose = $request->thursdayclose[$i];
                    }
                    if(isset($request->fridayopen[$i]))
                    {
                        $time->fridyopen = $request->fridayopen[$i];
                    }
                    if(isset($request->fridayclose[$i]))
                    {
                        $time->	fridyclose = $request->fridayclose[$i];
                    }
                    if(isset($request->saturdayopen[$i]))
                    {
                        $time->satdyopen = $request->saturdayopen[$i];
                    }
                    if(isset($request->saturdayclose[$i]))
                    {
                        $time->satdyclose = $request->saturdayclose[$i];
                    }

                    if(isset($request->sundayopen[$i]))
                    {
                        $time->sundyopen = $request->sundayopen[$i];
                    }
                    if(isset($request->sundayclose[$i]))
                    {
                        $time->sundyclose = $request->sundayclose[$i];
                    }

                    $time->save();

                }
            }



        }

        if($savepkg)
        {
            return redirect()->back()->with('success','Package Updated Successfully');
        }

    }
}
