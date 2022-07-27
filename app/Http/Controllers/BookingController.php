<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(Request $request)
    {

        $booking=new booking();
        $booking->user_id=Auth::user()->id;
        $booking->package_id=$request->package_id;
        $booking->event_date=$request->event_date;
        $booking->event_start=$request->event_start_time;
        $booking->event_end=$request->event_end_time;
        $booking->person=$request->total_person;
        $booking->bill=$request->total_bill;
        $booking->save();
        return redirect('/')->with('success','Event Booked successfully');
    }
}
