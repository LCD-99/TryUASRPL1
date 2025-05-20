@extends('layouts.app')

@section('content')
<h2>Daftar Booking</h2>

<table border="1" cellpadding="10" cellspacing="0" style="margin-top:10px">
    <thead>
        <tr>
            <th>User</th>
            <th>Gazebo</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->user->name }}</td>
            <td>{{ $booking->gazebo->name }}</td>
            <td>{{ $booking->booking_date }}</td>
            <td>{{ ucfirst($booking->status) }}</td>
            <td>
                <a href="{{ route('bookings.show', $booking) }}">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
