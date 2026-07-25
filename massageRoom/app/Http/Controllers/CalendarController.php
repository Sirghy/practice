<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Services\BookingService;

class CalendarController extends Controller
{
    private BookingService $bookingServ;

    public function __construct(BookingService $bookingServ)
    {
        $this->bookingServ = $bookingServ;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = $this->bookingServ->getAllEvents();


        return view('calendar.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        return response()->json(
            $this->bookingServ->createEvent($request->validated())
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBookingRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
