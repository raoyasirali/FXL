<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
/**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $bill =Input::get('t_bill');
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $bill,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Food Xpress." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
