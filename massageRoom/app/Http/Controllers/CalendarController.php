<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class CalendarController extends Controller
{
    public function index()
    {
        /* $events = array();
         $bookings = Booking::all();
         foreach ($bookings as $booking)
         {
             $events = [
                 'title' => $booking->title,
                 'start' => $booking->start_date,
                 'end' => $booking->end_date
             ];
         }*/

        $events = Booking::all()->map(function ($booking) {
            return [
                'title' => $booking->title,
                'start' => $booking->start_date,
                'end'   => $booking->end_date,
            ];

        });

        return view('calendar.index', ['events' => $events]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);
        $booking = Booking::create(
            [
                'title' => $request->title,
                'start_date' => $request->start_date,
                'end_date'   => $request->end_date,
            ]
        );

        return response()->json($booking);
    }
}
