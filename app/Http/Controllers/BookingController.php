<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = DB::table('bookings')->join('guides', 'bookings.tour_guide_id', '=', 'guides.id')->select()->get();
        $guides = Guide::all();

        return view('booking', compact('bookings', 'guides'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tour_guide_id' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'special_requests' => 'nullable|string',
        ]);

        Booking::create([
            'tour_guide_id' => (int) $request->tour_guide_id,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'special_requests' => $request->special_requests,
        ]);

        return redirect()->back()->with('success', 'Booking successful!');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()->with('success', 'Booking deleted successfully');
    }
}
