<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {
        $header = Header::latest()->first();

        return view('homeView',get_defined_vars());
    }
}
