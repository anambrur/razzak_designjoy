<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function web_form(){
        return view('form.web_form');
    }
}
