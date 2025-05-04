<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'from' => 'required|date',
            'to' => 'required|date|after:from',
            'room' => 'required|string',
            'capacity' => 'required|string',
            'payment' => 'required|string',
        ]);

        Reservation::create([
            'name' => $request->name,
            'contact_number' => $request->number,
            'reservation_from' => $request->from,
            'reservation_to' => $request->to,
            'room_type' => $request->room,
            'room_capacity' => $request->capacity,
            'payment_type' => $request->payment,
        ]);

        return redirect()->route('reservation')->with('success', 'Reservation created successfully!');
    }
}