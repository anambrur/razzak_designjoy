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















<footer class="footer">
                <div class="global-padding">
                    <div class="container-large">
                        <div class="footer_padding">
                            <div class="div-block-10">
                                <div class="div-block-11"><a href="/" aria-current="page"
                                        class="w-inline-block w--current"><img
                                            src="https://assets.website-files.com/6484ceb82495841656250545/6484ceb82495841656250533_614a5000615d62efc4f90f5f_Group%202263.svg"
                                            loading="lazy" alt="" class="image-2"></a>
                                    <div class="div-block-12"><img
                                            src="https://assets.website-files.com/6484ceb82495841656250545/6484ceb82495841656250534_611d718c63e40202e8a17cd3_Frame.svg"
                                            loading="lazy" alt="" class="image-3">
                                        <div>Designjoy is headquartered in fffffff<br>Phoenix, Arizona.</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="div-block-13">
                                        <div id="w-node-_2cab0df4-26a8-261b-cb58-eb9d590844c8-56250509"
                                            class="footer-col"><a href="#recent-work" class="footer-link">Latest
                                                projects</a><a href="#pricing" class="footer-link">Pricing</a><a
                                                href="#" class="footer-link">Contact</a></div>
                                        <div id="w-node-cea27d24-1150-ad15-a4a3-8f847e96269e-56250509"
                                            class="footer-col"><a href="#pricing" class="footer-link">Get
                                                started</a><a href="/terms-and-conditions" class="footer-link">Terms
                                                &amp; Condition</a><a href="/privacy-policy"
                                                class="footer-link">Privacy policy</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>