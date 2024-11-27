<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function checkout(Request $request, string $plan) 
    {
        $plans = [
            'premium' => env('STRIPE_PREMIUM_PRICE_ID'),
            'standard' => env('STRIPE_STANDARD_PRICE_ID'),
            'basic' => env('STRIPE_BASIC_PRICE_ID'),
        ];
    
        if (!isset($plans[$plan])) {
            abort(404);
        }
    
        $checkout = $request->user()
            ->newSubscription(env('PRODUCT_ID'), $plans[$plan])
            ->checkout([
                'success_url' => route('welcome'),
                'cancel_url' => route('payment'),
            ]);
    
        return redirect($checkout->url);
    }
    
}
