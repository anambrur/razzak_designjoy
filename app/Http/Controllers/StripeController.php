<?php

namespace App\Http\Controllers;

use Stripe\StripeClient;
use App\Models\Payment;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe.form');
    }

    public function stripe(Request $request)
    {
        $stripeSecret = config('stripe.secret');
        $stripe = new StripeClient($stripeSecret);

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->input('productName'),
                        ],
                        'unit_amount' => $request->input('price') * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
        ]);

        if (isset($response->id) && $response->id != '') {
            session()->put('product_name', $request->input('productName'));
            session()->put('quantity', 1);
            session()->put('price', $request->input('price'));
            return redirect($response->url);
        } else {
            return view('stripe.cancel');
        }
    }

    public function success(Request $request)
    {
        
        if (isset($request->session_id)) {
            $stripeSecret = config('stripe.secret');
            $stripe = new StripeClient($stripeSecret);
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            $payment = new Payment();
            $payment->payment_id = $response->id;
            $payment->product_name = session()->get('product_name');
            $payment->quantity = session()->get('quantity');
            $payment->amount = session()->get('price');
            $payment->currency = $response->currency;
            $payment->payer_name = $response->customer_details->name;
            $payment->payer_email = $response->customer_details->email;
            $payment->payment_status = $response->status;
            $payment->payment_method = "Stripe";
            $payment->save();

            session()->forget('product_name');
            session()->forget('quantity');
            session()->forget('price');
            return view('stripe.success');
        } else {
            return view('stripe.cancel');
        }
    }

    public function cancel()
    {
        return redirect()->route('cancel');
    }
}
