<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class EventController extends Controller
{
    //

    public function event()
    {

        $catgs = Category::all();
        return view('event', compact('catgs'));
    }
    public function login_event()
    {

        $catgs = Category::all();
        return view('login_event', compact('catgs'));
    }

    public function addplanner(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'min:1'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => 2,
            'lastname' => $request->lastname,
            'categoryid' => $request->category,
            'business' => $request->business,
            'email' => $request->email,
            'phone' =>  $request->contrycode,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        Auth()->login($user);
        if($user){
            return redirect('/planner')->with('success','Planner Created Successfully');
        }

    }

    public function restaurant()
    {
        $catgs = Category::all();
        // dd($catgs);
        return view('restaurant', compact('catgs'));

    }

    public function addrest(Request $request)
    {
        // if($request->mondayopen != null && $request->mondayclose != null)
        // {
        //     $request->validate([
        //         'mondayclose' => 'after:mondayopen',
        //     ]);
        // }
        // if($request->tuesdayopen != null && $request->tuesdayclose != null)
        // {
        //     $request->validate([
        //         'tuesdayclose' => 'after:tuesdayopen',
        //     ]);
        // }
        // if($request->wednesdayopen != null && $request->wednesdayclose != null)
        // {
        //     $request->validate([
        //         'wednesdayclose' => 'after:wednesdayopen',
        //     ]);
        // }
        // if($request->thursdayopen != null && $request->thursdayclose != null)
        // {
        //     $request->validate([
        //         'thursdayclose' => 'after:thursdayopen',
        //     ]);
        // }
        // if($request->fridayopen != null && $request->fridayclose != null)
        // {
        //     $request->validate([
        //         'fridayclose' => 'after:fridayopen',
        //     ]);
        // }
        // if($request->saturdayopen != null && $request->saturdayclose != null)
        // {
        //     $request->validate([
        //         'saturdayclose' => 'after:saturdayopen',
        //     ]);
        // }
        // if($request->sundayopen != null && $request->sundayclose != null)
        // {
        //     $request->validate([
        //         'sundayclose' => 'after:sundayopen',
        //     ]);
        // }
        // dd($request);
        $maxlop = max($request->count);
        for ($i = 0; $i < $maxlop; $i++) {
            $rest = new Restaurant;
            $rest->planner_id = auth()->user()->id;
            $rest->categoryid = $request->category;
            
            

            $rest->business = $request->business;
            $rest->address = $request->address;
            if($request->has('_24by7'))
            {
                $rest->availalltime = 1;
            }
            else
            {
                $rest->availalltime = 0;
                for($j = 1; $j < 8; $j++)
                {
                    $holiday='holiday'.$j;
                    if($request->has($holiday))
                    {
                        $rest->$holiday = 1;

                    }

                }
                
                if(isset($request->mondayopen[$i]))
                {
                    $rest->mondyopen = $request->mondayopen[$i];

                }
                
                if(isset($request->mondayclose[$i]))
                {
                    $rest->mondyclose = $request->mondayclose[$i];
                }
                if(isset($request->tuesdayopen[$i]))
                {
                    $rest->tuedyopen = $request->tuesdayopen[$i];
                }
                if(isset($request->tuesdayclose[$i]))
                {
                    $rest->tuedyclose = $request->tuesdayclose[$i];
                }
                if(isset($request->wednesdayopen[$i]))
                {
                    $rest->wedopen = $request->wednesdayopen[$i];
                }
                if(isset($request->wednesdayclose[$i]))
                {
                    $rest->wedclose = $request->wednesdayclose[$i];
                }
                if(isset($request->thursdayopen[$i]))
                {
                    $rest->thurdyopen = $request->thursdayopen[$i];
                }
                if(isset($request->thursdayclose[$i]))
                {
                    $rest->thurdyclose = $request->thursdayclose[$i];
                }
                if(isset($request->fridayopen[$i]))
                {
                    $rest->fridyopen = $request->fridayopen[$i];
                }
                if(isset($request->fridayclose[$i]))
                {
                    $rest->	fridyclose = $request->fridayclose[$i];
                }
                if(isset($request->saturdayopen[$i]))
                {
                    $rest->satdyopen = $request->saturdayopen[$i];
                }
                if(isset($request->saturdayclose[$i]))
                {
                    $rest->satdyclose = $request->saturdayclose[$i];
                }
                
                if(isset($request->sundayopen[$i]))
                {
                    $rest->sundyopen = $request->sundayopen[$i];
                }
                if(isset($request->sundayclose[$i]))
                {
                    $rest->sundyclose = $request->sundayclose[$i];
                }
            }
            
            $saveresult = $rest->save();
           

          }
            if($saveresult)
            {
                return redirect()->back()->with('success','Restaurant Added Successfully');
            }
        // $rest = new Restaurant;
        // $rest->planner_id = auth()->user()->id;
        // $rest->categoryid = $request->category;
        // $rest->business = $request->business;
        // $rest->address = $request->address;
        // $rest->mondyopen = $request->mondayopen;
        // $rest->mondyclose = $request->mondayclose;
        // $rest->tuedyopen = $request->tuesdayopen;
        // $rest->tuedyclose = $request->tuesdayclose;
        // $rest->wedopen = $request->wednesdayopen;
        // $rest->wedclose = $request->wednesdayclose;
        // $rest->thurdyopen = $request->thursdayopen;
        // $rest->thurdyclose = $request->thursdayclose;
        // $rest->fridyopen = $request->fridayopen;
        // $rest->fridyclose = $request->fridayclose;
        // $rest->satdyopen = $request->saturdayopen;
        // $rest->satdyclose = $request->saturdayclose;
        // $rest->sundyopen = $request->sundayopen;
        // $rest->sundyclose = $request->sundayclose;
        // $rest->save();

        
    }


    
}
