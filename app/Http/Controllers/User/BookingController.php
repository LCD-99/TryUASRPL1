<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Gazebo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Auth::user()->bookings()->with('gazebo')->get();
        return view('user.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $gazebos = Gazebo::all();
        return view('user.bookings.create', compact('gazebos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gazebo_id' => 'required|exists:gazebos,id',
            'booking_date' => 'required|date|after_or_equal:today',
        ]);

        $exists = Booking::where('gazebo_id', $request->gazebo_id)
            ->where('booking_date', $request->booking_date)
            ->where('status', 'approved')
            ->exists();

        if ($exists) {
            return back()->withErrors(['booking_date' => 'Gazebo sudah dibooking pada tanggal tersebut']);
        }

        Booking::create([
            'user_id' => Auth::id(),
            'gazebo_id' => $request->gazebo_id,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
        ]);

        return redirect()->route('user.bookings.index')->with('success', 'Booking berhasil dibuat, menunggu persetujuan admin.');
    }
}
