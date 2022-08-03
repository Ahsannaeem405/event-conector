<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Chat;
use App\Models\note;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(Request $request)
    {


        $pkg = Package::find($request->package_id);
        $booking = new booking();
        $booking->user_id = Auth::user()->id;
        $booking->package_id = $request->package_id;
        $booking->event_date = $request->event_date;
        $booking->event_start = $request->event_start_time;
        $booking->event_end = $request->event_end_time;
        $booking->person = $request->total_person;
        $booking->owner_id = $pkg->resturent->planner_id;
        $booking->save();

        return redirect('/')->with('success', 'Event Booked successfully');
    }

    public function mybook(Request $request)
    {
        if (Auth::user()->role==2)
        {
            $bookings = booking::whereOwnerId(Auth::user()->id)->orderBy('id', 'DESC')->get();

        }
        else{
            $bookings = booking::whereUserId(Auth::user()->id)->orderBy('id', 'DESC')->get();

        }
        return view('booking.index', compact('bookings'));
    }

    public function bookingDetail($id)
    {

        $id = decrypt($id);
        $booking = booking::findOrFail($id);
        $notes=note::whereBookingId($id)->whereUserId(Auth::user()->id)->get();
        $messages=Chat::whereIn('from_id',[Auth::id(),$booking->getUser()->id])->whereIn('to_id',[Auth::id(),$booking->getUser()->id])->get();

        return view('booking.detail', compact('booking','notes','messages'));

    }

    public function bookingStaus(Request $request, booking $booking, $id)
    {

        $booking = $booking->find($id);
        $booking->status = $request->status;
        $booking->update();
        return back()->with('success','Status updated successfully');
    }


    public function index()
    {
        $bookings=booking::all();
        return view('admin.bookings.index',compact('bookings'));
    }

    public function delete($id)
    {
        $id=decrypt($id);
        $booking=booking::findOrFail($id);
        return back()->with('success','Booking deleted successfully');
    }
}
