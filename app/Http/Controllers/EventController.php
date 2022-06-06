<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
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
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        Auth()->login($user);
        if($user){
            return redirect('/planner')->with('success','Planner Created Successfully');
        }

    }
}
