<?php

namespace App\Http\Controllers;

use App\Models\BookingLink;
use Illuminate\Http\Request;

class BookingLinkController extends Controller
{
    public function booking(Request $request)
    {
        $booking_url = BookingLink::latest()->first();
        return view('admin.header.booking', compact('booking_url'));
    }

    // booking store
    public function booking_link_store(Request $request, $id)
    {
        // dd($request->all());
        // dd($id);


        $request->validate([
            'booking_link' => 'required', // Validation for the booking link
        ]);

        $booking_url = BookingLink::findOrFail($id);
        $booking_url->update($request->all());
        // $booking_url->booking_link = $request->booking_link;
        // $booking_url->save();
        // dd($booking_url);

        return redirect()->route('booking')->with('success', 'Booking URL updated successfully!');
    }
}
