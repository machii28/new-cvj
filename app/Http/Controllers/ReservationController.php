<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Reservation\AddRequest;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
    }

    public function store(AddRequest $request)
    {
        $reservation = new Reservation($request->validated());
        $reservation->save();

        return response()->json($reservation);
    }

    public function getEvent(Request $request)
    {
        $month = new Carbon($request->date);

        $events = Reservation::whereRAW('MONTH(event_date) = ' . $month->format('m'))->get();

        return response()->json($events);
    }
}
