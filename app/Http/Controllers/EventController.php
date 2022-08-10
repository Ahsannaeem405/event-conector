<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Timing;
use App\Models\Package;
use App\Models\Favourite;

use DB;
use Eastwest\Json\Json;
use Eastwest\Json\JsonException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;

class EventController extends Controller
{
    public $resturent;

    public function __construct(Restaurant $restaurant)
    {
        $this->resturent = $restaurant;

    }

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
            'phone' => $request->contrycode,
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
            $fileName2 = time() . "1_." . $extension;
            $request->file->move('upload/', $fileName2);
            $rest->logo = $fileName2;
        }


        if ($request->_24by7 == 1) {
            $rest->availalltime = 1;
            $saveresult = $rest->save();
        } else {
            $rest->availalltime = 0;

            for ($j = 1; $j < 8; $j++) {
                $holiday = 'holiday' . $j;
                $day24 = '_24_day' . $j;
                if ($request->has($holiday)) {
                    $rest->$holiday = 1;

                } elseif ($request->has($day24)) {
                    $rest->$holiday = 24;
                }

            }
            $saveresult = $rest->save();

            $maxlop = max($request->count);
            for ($i = 0; $i <= $maxlop; $i++) {

                $check = 0;
                // echo $i;
                $time = new Timing;
                $time->restaurant_id = $rest->id;
                if (isset($request->mondayopen[$i])) {
                    $time->mondyopen = $request->mondayopen[$i];
                    $time->mondyclose = $request->mondayclose[$i];
                    $check = 1;
                }


                if (isset($request->tuesdayopen[$i])) {
                    $time->tuedyopen = $request->tuesdayopen[$i];
                    $time->tuedyclose = $request->tuesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->wednesdayopen[$i])) {
                    $time->wedopen = $request->wednesdayopen[$i];
                    $time->wedclose = $request->wednesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->thursdayopen[$i])) {
                    $time->thurdyopen = $request->thursdayopen[$i];
                    $time->thurdyclose = $request->thursdayclose[$i];
                    $check = 1;
                }

                if (isset($request->fridayopen[$i])) {
                    $time->fridyopen = $request->fridayopen[$i];
                    $time->fridyclose = $request->fridayclose[$i];
                    $check = 1;
                }

                if (isset($request->saturdayopen[$i])) {
                    $time->satdyopen = $request->saturdayopen[$i];
                    $time->satdyclose = $request->saturdayclose[$i];
                    $check = 1;
                }


                if (isset($request->sundayopen[$i])) {
                    $time->sundyopen = $request->sundayopen[$i];
                    $time->sundyclose = $request->sundayclose[$i];
                    $check = 1;
                }

                if ($check == 1) {
                    $time->save();
                }


            }


        }


        if ($user) {
            return redirect('/')->with('success', 'Planner Created Successfully');
        }

    }

    public function hostevent(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'min:1'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);
        $user = User::find(auth()->user()->id);
        // dd($user);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->contrycode;
        $user->business = $request->business;
        $user->role = 2;
        $user->categoryid = $request->category;
        $user->address = $request->address;
        $user->update();

        Auth()->login($user);
        $rest = new Restaurant;
        $rest->planner_id = auth()->user()->id;
        $rest->categoryid = $request->category;
        $rest->business = $request->business;
        $rest->address = $request->address;

        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $extension = $request->file->extension();
            // dd($extension);
            $fileName2 = time() . "1_." . $extension;
            $request->file->move('upload/', $fileName2);
            $rest->logo = $fileName2;
        }


        if ($request->_24by7 == 1) {
            $rest->availalltime = 1;
            $saveresult = $rest->save();
        } else {
            $rest->availalltime = 0;

            $saveresult = $rest->save();


        }


        if ($user) {
            return redirect('/')->with('success', 'Planner Created Successfully');
        }
    }

    public function restaurant()
    {
        $catgs = Category::all();
        $rests = Restaurant::where('planner_id', auth()->user()->id)->get();
        $pkgs = Package::where('planner_id', auth()->user()->id)->get();
        $response = $this->resturent->getResturentdata(auth()->user()->id);
        $bookings=booking::whereOwnerId(auth()->user()->id)->count();

        return view('host.resturent.restaurant', compact('bookings','catgs', 'rests', 'pkgs', 'response'));

    }

    public function addrest(Request $request)
    {
        // dd($request);

        $rest = new Restaurant;
        $rest->planner_id = auth()->user()->id;
        $rest->categoryid = $request->category;
        $rest->business = $request->business;
        $rest->address = $request->address;

        if ($request->hasFile('file')) {


            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName2 = time() . "1_." . $extension;
            $request->file->move('upload/', $fileName2);
            $rest->logo = $fileName2;
        }


        if ($request->_24by7 == 1) {
            $rest->availalltime = 1;
            $saveresult = $rest->save();
        } else {
            $rest->availalltime = 0;

            for ($j = 1; $j < 8; $j++) {
                $holiday = 'holiday' . $j;
                $day24 = '_24_day' . $j;
                if ($request->has($holiday)) {
                    $rest->$holiday = 1;

                } elseif ($request->has($day24)) {
                    $rest->$holiday = 24;
                }

            }
            $saveresult = $rest->save();

            $maxlop = max($request->count);
            for ($i = 0; $i <= $maxlop; $i++) {

                $check = 0;
                // echo $i;
                $time = new Timing;
                $time->restaurant_id = $rest->id;
                if (isset($request->mondayopen[$i])) {
                    $time->mondyopen = $request->mondayopen[$i];
                    $time->mondyclose = $request->mondayclose[$i];
                    $check = 1;
                }


                if (isset($request->tuesdayopen[$i])) {
                    $time->tuedyopen = $request->tuesdayopen[$i];
                    $time->tuedyclose = $request->tuesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->wednesdayopen[$i])) {
                    $time->wedopen = $request->wednesdayopen[$i];
                    $time->wedclose = $request->wednesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->thursdayopen[$i])) {
                    $time->thurdyopen = $request->thursdayopen[$i];
                    $time->thurdyclose = $request->thursdayclose[$i];
                    $check = 1;
                }

                if (isset($request->fridayopen[$i])) {
                    $time->fridyopen = $request->fridayopen[$i];
                    $time->fridyclose = $request->fridayclose[$i];
                    $check = 1;
                }

                if (isset($request->saturdayopen[$i])) {
                    $time->satdyopen = $request->saturdayopen[$i];
                    $time->satdyclose = $request->saturdayclose[$i];
                    $check = 1;
                }


                if (isset($request->sundayopen[$i])) {
                    $time->sundyopen = $request->sundayopen[$i];
                    $time->sundyclose = $request->sundayclose[$i];
                    $check = 1;
                }

                if ($check == 1) {
                    $time->save();
                }


            }


        }

        if ($saveresult) {
            return redirect()->back()->with('success', 'Restaurant Added Successfully');
        }


    }

    public function editrest(Request $request)
    {
        $rest = Restaurant::find($request->id);
        $catgs = Category::all();
        // dd($rest->time);

        return view('host.resturent.edit_restaurant', compact('rest', 'catgs'));

    }

    public function update_restaurant(Request $request)
    {


        DB::table('timings')
            ->where('restaurant_id', $request->id)
            ->delete();

        $rest = Restaurant::find($request->id);
        // $rest->planner_id = auth()->user()->id;
        $rest->categoryid = $request->category;
        $rest->business = $request->business;
        $rest->address = $request->address;

        if ($request->hasFile('file')) {


            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName2 = time() . "1_." . $extension;
            $request->file->move('upload/', $fileName2);
            $rest->logo = $fileName2;
        }


        if ($request->_24by == 1) {
            $rest->availalltime = 1;
            $result = $rest->update();
        } else {
            $rest->availalltime = 0;

            for ($j = 1; $j < 8; $j++) {
                $holiday = 'holiday' . $j;
                $day24 = '_24_day' . $j;
                if ($request->has($holiday)) {
                    $rest->$holiday = 1;

                } elseif ($request->has($day24)) {
                    $rest->$holiday = 24;
                }

            }
            $result = $rest->update();

            $maxlop = max($request->count);
            for ($i = 0; $i <= $maxlop; $i++) {

                $check = 0;
                // echo $i;
                $time = new Timing;
                $time->restaurant_id = $rest->id;
                if (isset($request->mondayopen[$i])) {
                    $time->mondyopen = $request->mondayopen[$i];
                    $time->mondyclose = $request->mondayclose[$i];
                    $check = 1;
                }


                if (isset($request->tuesdayopen[$i])) {
                    $time->tuedyopen = $request->tuesdayopen[$i];
                    $time->tuedyclose = $request->tuesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->wednesdayopen[$i])) {
                    $time->wedopen = $request->wednesdayopen[$i];
                    $time->wedclose = $request->wednesdayclose[$i];
                    $check = 1;
                }

                if (isset($request->thursdayopen[$i])) {
                    $time->thurdyopen = $request->thursdayopen[$i];
                    $time->thurdyclose = $request->thursdayclose[$i];
                    $check = 1;
                }

                if (isset($request->fridayopen[$i])) {
                    $time->fridyopen = $request->fridayopen[$i];
                    $time->fridyclose = $request->fridayclose[$i];
                    $check = 1;
                }

                if (isset($request->saturdayopen[$i])) {
                    $time->satdyopen = $request->saturdayopen[$i];
                    $time->satdyclose = $request->saturdayclose[$i];
                    $check = 1;
                }


                if (isset($request->sundayopen[$i])) {
                    $time->sundyopen = $request->sundayopen[$i];
                    $time->sundyclose = $request->sundayclose[$i];
                    $check = 1;
                }

                if ($check == 1) {
                    $time->save();
                }
            }


            if ($result) {
                return redirect()->back()->with('success', 'Restaurant updated Successfully');
            }
        }


    }

    public function delete_resturent($id)
    {
        $id = decrypt($id);
        $del = Restaurant::findorFail($id)->delete();
        return back()->with('success', 'Record deleted successfully');

    }

    public function add_favorite(Request $request)
    {
        // dd($request->businessid, $request->id);

        $favourite = Favourite::where('user_id', auth()->user()->id)->where('pakgresttid', $request->id)->where('parent', $request->businessid)->first();
        if ($favourite) {
            $favourite->delete();
            return response()->json(['msg' => 'delete']);
        } else {
            $favr = new Favourite;
            $favr->user_id = auth()->user()->id;
            $favr->pakgresttid = $request->id;
            $favr->parent = $request->businessid;
            $favr->save();
            return response()->json(['msg' => 'add']);

        }

    }


    public function favourites()
    {
        // $catgs = Category::all();
        $rests = Restaurant::whereHas('favouriterest')->get();
        $pkgs = Package::whereHas('favourite')->get();

        // $response=  $this->resturent->getResturentdata(auth()->user()->id);


        return view('host.favourites', compact('rests', 'pkgs'));
    }

    public function details($id, Request $request)
    {

        $user = \Illuminate\Support\Facades\Auth::user();
        $pkg = Package::findOrFail(decrypt($id));
        $imgs = $pkg->logo;

        return view('host.package.details', compact('pkg', 'imgs', 'user'));
    }

    public function avibility(Request $request)
    {

        $holiday = [
            0 => 'holiday7',
            1 => 'holiday1',
            2 => 'holiday2',
            3 => 'holiday3',
            4 => 'holiday4',
            5 => 'holiday5',
            6 => 'holiday6',
        ];

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
        $check = 1;
        $date = Carbon::parse($request->date)->format('Y-m-d');
        $dayOfTheWeek = Carbon::createFromFormat('Y-m-d', $date)->dayOfWeek;
        $weekOpen = $weekOpen[$dayOfTheWeek];
        $weekClose = $weekClose[$dayOfTheWeek];
        $holiday = $holiday[$dayOfTheWeek];


        $package = Package::find($request->id);

        if ($package->availalltime == 0 && $package->$holiday != 24) {

            $package = Package::whereId($request->id)
                ->whereHas('pkgtime', function ($q) use ($weekOpen, $request, $weekClose) {
                    $q->whereTime($weekOpen, '<=', $request->time_start)
                        ->whereTime($weekClose, '>=', $request->time_end);
                })->count();

            $check = $package == 1 ? 1 : 0;

        }
        if ($check == 1) {
            $booking = booking::where('package_id', $request->id)
                ->whereDate('event_date', Carbon::parse($request->date)->format('Y-m-d'))
                ->whereTime('event_end', '>=', $request->time_start)
                ->exists();

            $check = $booking ? 0 : 1;

        }


        if ($check == 1) {
            return response()->json(['available' => true, 'message' => 'Available for Booking']);

        } else {
            return response()->json(['available' => false, 'error' => 'Not available for Booking']);

        }
    }
}

