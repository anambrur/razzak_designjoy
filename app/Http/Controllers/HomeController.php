<?php

namespace App\Http\Controllers;

use App\Models\BookingLink;
use App\Models\Price;
use App\Models\Header;
use App\Models\ProjectPhoto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {
        $header = Header::latest()->first();
        $prices = Price::latest()->get();
        $projectPhotos = ProjectPhoto::latest()->take(6)->get();
        $bookingLink = BookingLink::latest()->pluck('booking_link')->first();
        // dd($bookingLink);
        
        // dd($prices);
        foreach ($prices as $price) {
            $price->web_basic;
            $price->web_standard;
            $price->web_pro;
            $price->logo_basic;
            $price->logo_standard;
            $price->logo_pro;
            $price->marketing_basic;
            $price->marketing_standard;
            $price->marketing_pro;
        }
        // dd($price->web_standard);
        return view('homeView', get_defined_vars());
    }
}
