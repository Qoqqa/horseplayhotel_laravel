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
            'contact_number' => 'required|string|max:20',
            'from' => 'required|date',
            'to' => 'required|date|after:from',
            'room_type' => 'required|string',
            'room_capacity' => 'required|string',
            'payment_type' => 'required|string',
        ]);

        $reservation = Reservation::create([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'reservation_from' => $request->from,
            'reservation_to' => $request->to,
            'room_type' => $request->room_type,
            'room_capacity' => $request->room_capacity,
            'payment_type' => $request->payment_type,
        ]);

        return redirect()->route('reservation')->with('success', 'Reservation created successfully!');
    }
}