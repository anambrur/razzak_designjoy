<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function web_form()
    {
        return view('form.web_form');
    }
    public function logo_form()
    {
        return view('form.logo_form');
    }
    public function logo_form_store(Request $request)
    {

        dd($request->all());
        return view('form.logo_form');
    }
}
