<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }

    /////custom form 
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
        $validated = $request->validate([
            'company_description' => 'required|string|max:255',
            'font_selection' => 'required|array',
            'websites' => 'required|string|max:255',
            'details' => 'required|string|max:255',
            'source_7' => 'required|array',
            'additional_needs' => 'required|array',
            'logo_type' => 'required|array',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
        ]);

        Form::create($validated);
        return view('homeView');
    }
    public function web_form_store(Request $request)
    {
        $validated = $request->validate([
            'stape_1' => 'required|string|max:255',
            'company_description' => 'required|string|max:255',
            'font_selection' => 'required|array',
            'stape_4' => 'required|string|max:255',
            'source_5' => 'required|array',
            'source_6' => 'required|array',
            'source_7' => 'required|array',
            'additional_needs' => 'required|array',
            'source_9' => 'required|array',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
        ]);

        Form::create($validated);
        return view('homeView');
    }
}
