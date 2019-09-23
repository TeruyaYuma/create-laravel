<?php

namespace App\Http\Controllers;

use App\Time;
use App\Treatment;
use App\User;
use App\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class bookingTableController extends Controller
{
    //main
    public function index()
    {
        return view('booking.index');
    }
    //get creat
    public function new(Request $request)
    {   
        $times = Time::all();
        $treatments = Treatment::all();

        $due_date = $request->due_date;
        $bookings = Booking::where('due_date',$due_date)->get();
        
        return view('booking.new',compact('times','treatments','bookings','due_date'));
    }
    //post creat
    public function create(Request $request)
    {
       $booking = new Booking;

       $time = date('YmjHis');
       $booking->due_date = $request->due_date;
       $booking->user_id = Auth::id();
       $booking->time_id = $request->time;
       $booking->treatment_id = $request->treatment;
       $booking->pic = $request->pic->storeAs('public/post_images', $time.'_'.Auth::id().'.jpg');
       $booking->comment = $request->comment;
       $booking->save();

       return redirect('/booking');
    }
    //show booking(master only)
    public function show()
    {
        $bookings = Booking::orderBy('due_date','desc')->get();

        $user_booking = Booking::where('user_id', Auth::id())->orderBy('id','desc')->first();
    
        return view('booking.show', compact('bookings'));
    }
    //show detail
    public function detail($id)
    {
         $booking = Booking::find($id);

         $img_url = str_replace('public/', 'storage/',$booking->pic);

        return view('booking.detail', compact('booking','img_url'));
    }
    //delete(master only)
    public function delete($id)
    {
        Booking::find($id)->delete();

        return redirect('/booking/show');
    }
}
