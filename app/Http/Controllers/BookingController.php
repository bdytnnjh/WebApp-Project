<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::all();
        $guides = Guide::all();
        return view('booking', compact('booking', 'guides'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tour_guide_id' => 'required|exists:tour_guides,id',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'special_requests' => 'nullable|string',
        ]);

        Booking::create([
            'tour_guide_id' => $request->tour_guide_id,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'special_requests' => $request->special_requests,
        ]);

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
