<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Gazebo;


class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('user', 'gazebo')->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $booking->update(['status' => $request->status]);

        return redirect()->route('bookings.index')->with('success', 'Status booking berhasil diperbarui');
    }

    public function showGazeboSchedule()
    {
        $gazebos = Gazebo::all();
        $bookings = Booking::with('gazebo', 'user')
                    ->orderBy('booking_date', 'asc')
                    ->get();

        return view('user.gazebos.schedule', compact('gazebos', 'bookings'));
    }

}
