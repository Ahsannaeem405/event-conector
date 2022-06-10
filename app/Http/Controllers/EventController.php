<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Timing;

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
        $rest = new Restaurant;
            $rest->planner_id = auth()->user()->id;
            $rest->categoryid = $request->category;                    
            $rest->business = $request->business;
            $rest->address = $request->address;

            if ($request->hasFile('file')) {
                          
        
                    $file = $request->file('file');
                    $extension = $request->file->extension();
                    $fileName2 = time(). "1_." .$extension;
                    $request->file->move('upload/', $fileName2);
                    $rest->logo = $fileName2;
            }
            

            if($request->_24by7 == 1 )
            {
                $rest->availalltime = 1;
                $saveresult = $rest->save();
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
                    else{
                        $rest->$holiday = 0;
                    }

                }
                $saveresult = $rest->save();
                if($request->repeatt == 1)
                {      
                    $maxlop = max($request->count);
                    for ($i = 0; $i <= $maxlop; $i++) {
                        // echo $i;
                        $time = new Timing;
                        $time->restaurant_id =  $rest->id;
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
                            $time-> fridyclose = $request->fridayclose[$i];
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
                        
           

      
        if($user){
            return redirect('/planner')->with('success','Planner Created Successfully');
        }

    }

    public function restaurant()
    {
        $catgs = Category::all();
        $rests = Restaurant::where('planner_id', auth()->user()->id)->get();
        // dd($rests);
        return view('restaurant', compact('catgs', 'rests'));

    }

    public function addrest(Request $request)
    {
        // dd($request->count);
      
            $rest = new Restaurant;
            $rest->planner_id = auth()->user()->id;
            $rest->categoryid = $request->category;                    
            $rest->business = $request->business;
            $rest->address = $request->address;

            if ($request->hasFile('file')) {
                          
        
                    $file = $request->file('file');
                    $extension = $request->file->extension();
                    $fileName2 = time(). "1_." .$extension;
                    $request->file->move('upload/', $fileName2);
                    $rest->logo = $fileName2;
            }
            

            if($request->_24by7 == 1 )
            {
                $rest->availalltime = 1;
                $saveresult = $rest->save();
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
                    else{
                        $rest->$holiday = 0;
                    }

                }
                $saveresult = $rest->save();
                if($request->repeatt == 1)
                {      
                    $maxlop = max($request->count);
                    for ($i = 0; $i <= $maxlop; $i++) {
                        // echo $i;
                        $time = new Timing;
                        $time->restaurant_id =  $rest->id;
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
                        
            if($saveresult)
            {
                return redirect()->back()->with('success','Restaurant Added Successfully');
            }
       

        
    }


    
}
