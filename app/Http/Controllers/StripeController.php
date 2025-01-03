<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createMembership(Request $request){
        $months = $request->input('months');
        $pricePerMonth = 1700;
        $quantity = $request->input('quantity');
        $total = $months * $pricePerMonth;
        $user = auth()->user();

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $lineItems[] = [
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => "Gym Membership - {$months} Month(s)",
                    ],
                    'unit_amount' => $total,
                ],

                'quantity' => $quantity,
            ],
        ];

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'metadata' => [
                'user_id' => "0001"
            ],
            'customer_email' => $user->email,
            'success_url' => route('membership.success'),
            'cancel_url' => route('membership.cancel'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(){
        return view('membership.success');
    }

    
    public function cancel(){
        return view('membership.cancel');
    }
}
