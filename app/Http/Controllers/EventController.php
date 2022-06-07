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
        if($request->mondayopen != null && $request->mondayclose != null)
        {
            $request->validate([
                'mondayclose' => 'after:mondayopen',
            ]);
        }
        if($request->tuesdayopen != null && $request->tuesdayclose != null)
        {
            $request->validate([
                'tuesdayclose' => 'after:tuesdayopen',
            ]);
        }
        if($request->wednesdayopen != null && $request->wednesdayclose != null)
        {
            $request->validate([
                'wednesdayclose' => 'after:wednesdayopen',
            ]);
        }
        if($request->thursdayopen != null && $request->thursdayclose != null)
        {
            $request->validate([
                'thursdayclose' => 'after:thursdayopen',
            ]);
        }
        if($request->fridayopen != null && $request->fridayclose != null)
        {
            $request->validate([
                'fridayclose' => 'after:fridayopen',
            ]);
        }
        if($request->saturdayopen != null && $request->saturdayclose != null)
        {
            $request->validate([
                'saturdayclose' => 'after:saturdayopen',
            ]);
        }
        if($request->sundayopen != null && $request->sundayclose != null)
        {
            $request->validate([
                'sundayclose' => 'after:sundayopen',
            ]);
        }
        
        // dd($request);
        $rest = new Restaurant;
        $rest->planner_id = auth()->user()->id;
        $rest->categoryid = $request->category;
        $rest->business = $request->business;
        $rest->address = $request->address;
        $rest->mondyopen = $request->mondayopen;
        $rest->mondyclose = $request->mondayclose;
        $rest->tuedyopen = $request->tuesdayopen;
        $rest->tuedyclose = $request->tuesdayclose;
        $rest->wedopen = $request->wednesdayopen;
        $rest->wedclose = $request->wednesdayclose;
        $rest->thurdyopen = $request->thursdayopen;
        $rest->thurdyclose = $request->thursdayclose;
        $rest->fridyopen = $request->fridayopen;
        $rest->fridyclose = $request->fridayclose;
        $rest->satdyopen = $request->saturdayopen;
        $rest->satdyclose = $request->saturdayclose;
        $rest->sundyopen = $request->sundayopen;
        $rest->sundyclose = $request->sundayclose;
        $rest->save();
        return redirect()->back()->with('success','Restaurant Added Successfully');

        
    }


    
}
