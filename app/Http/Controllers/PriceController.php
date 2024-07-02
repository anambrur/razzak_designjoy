<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $prices = Price::latest()->get();
        return view('admin.price.price_list', compact('prices'));
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
        // Dump and Die to debug request data
        // dd($request->all());

        $request->validate([
            'web_basic' => 'required',
            'web_standard' => 'required',
            'web_pro' => 'required',
            'logo_basic' => 'required',
            'logo_standard' => 'required',
            'logo_pro' => 'required',
            'marketing_basic' => 'required',
            'marketing_standard' => 'required',
            'marketing_pro' => 'required',
            'subscription_basic' => 'required',
            'subscription_standard' => 'required',
            'subscription_pro' => 'required',
        ]);

        // Ensure price ID is valid
        $price = Price::findOrFail($request->price_id);
        // dd($price);
        $price->delete();

        // Create new price record
        Price::create($request->only([
            'web_basic', 'web_standard', 'web_pro',
            'logo_basic', 'logo_standard', 'logo_pro',
            'marketing_basic', 'marketing_standard', 'marketing_pro',
            'subscription_basic', 'subscription_standard', 'subscription_pro'
        ]));

        // Redirect with success message
        return redirect()->route('price.index')->with('success', 'Price updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Price $price)
    {
        //
    }
}