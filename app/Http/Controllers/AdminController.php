<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function users()
    {
        $users = User::where('role', '3')->get();
// dd($users);
        return view('admin/users', compact('users'));
    }

    public function planners()
    {

        return view('admin/planners');
    }

    public function edituser(Request $request)
    {

        // dd('yyy');
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->update();
        return back();
       
        
    }

    public function dltuser(Request $request)
    {      
        $user = User::where('id', $request->id)->delete();
        return back();
        
    }

    

    
}
