<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role', '3')->orderBy('id', 'DESC')->get();
        return view('admin/index', compact('users'));
    }

    public function users()
    {
        $users = User::where('role', '3')->get();
        return view('admin/users', compact('users'));
    }

    public function planners()
    {
        $users = User::where('role', '2')->get();
        return view('admin/planners', compact('users'));
    }

    public function edituser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->update();
        return redirect()->back()->with('success','Record Updated Successfully');

    }

    public function dltuser(Request $request)
    {      
        $user = User::where('id', $request->id)->delete();
        return redirect()->back()->with('error','Record Deleted Successfully');
        
    }

    public function categories()
    {
        $catgs = Category::all();

        return view('admin/categories', compact('catgs'));
    }

    public function addcategory(Request $request)
    {

        // dd($request);
        $catg = new Category;
        $catg->name = $request->catgname;

        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName2 = time() . "1_." . $extension;
            $request->file->move('upload/categoryimages', $fileName2);
            $catg->logo = $fileName2;
        }

        $catg->save();

        return redirect()->back()->with('success','Cateory added Successfully');
    }

    public function editcatg(Request $request)
    {
        $catg = Category::find($request->id);
        $catg->name = $request->name;
        $catg->update();
        return redirect()->back()->with('success','Category Updated Successfully');
        
    }

    public function dltcatg(Request $request)
    {      
        $user = Category::where('id', $request->id)->delete();
        return redirect()->back()->with('success','Category Deleted Successfully');
        
    }

    
        
    
    
}
