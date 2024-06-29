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
    public function marketing_form()
    {
        return view('form.marketing_form');
    }
    public function logo_form_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
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

        Form::create(['form_type' => $request->form_type, 'logo_type' => $request->logo_type, 'font_selection' => $request->font_selection, 'websites' => $request->websites, 'company_description' => $request->company_description, 'details' => $request->details, 'source_7' => $request->source_7, 'additional_needs' => $request->additional_needs, 'first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone_number' => $request->phone_number, 'email' => $request->email, 'company' => $request->company]);
        return redirect()->route('homeView');
    }
    public function web_form_store(Request $request)
    {
        
        $request->validate([
            'form_type' => 'required|string|max:255',
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
        Form::create(['form_type' => $request->form_type, 'stape_1' => $request->stape_1, 'company_description' => $request->company_description, 'font_selection' => $request->font_selection, 'stape_4' => $request->stape_4, 'source_5' => $request->source_5, 'source_6' => $request->source_6, 'source_7' => $request->source_7, 'additional_needs' => $request->additional_needs, 'source_9' => $request->source_9, 'first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone_number' => $request->phone_number, 'email' => $request->email, 'company' => $request->company]);
        return redirect()->route('homeView');
    }
    public function marketing_form_store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'logo_type' => 'required|array',
            'company_description' => 'required|string|max:255',
            'marketing_goal' => 'required|string|max:255',
            'source_4' => 'required|array',
            'source_5' => 'required|string|max:255',
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

        Form::create(['form_type' => $request->form_type, 'logo_type' => $request->logo_type, 'marketing_goal' => $request->marketing_goal, 'company_description' => $request->company_description, 'source_4' => $request->source_4, 'source_5' => $request->source_5, 'additional_needs' => $request->additional_needs, 'source_6' => $request->source_6, 'source_7' => $request->source_7, 'source_9' => $request->source_9, 'first_name' => $request->first_name, 'last_name' => $request->last_name, 'phone_number' => $request->phone_number, 'email' => $request->email, 'company' => $request->company]);
        return redirect()->route('homeView');
    }


    // backend form data table
    public function web_form_data()
    {
        $web_form = Form::where('form_type', 'web_form')->get();

        return view('admin.form.web_form', compact('web_form'));
    }
    public function logo_form_data()
    {

        $logo_form = Form::where('form_type', 'logo_form')->get();
        
        return view('admin.form.logo_form', compact('logo_form'));
    }
    public function marketing_form_data()
    {
        $marketing_form = Form::where('form_type', 'marketing_form')->get();
        // dd($marketing_form);
        return view('admin.form.marketing_form', compact('marketing_form'));
    }
}
