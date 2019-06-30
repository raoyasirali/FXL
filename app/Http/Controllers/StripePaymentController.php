<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use Stripe;
use Auth;
use App\User;
use App\checkout;
use App\onlinepayment;



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
    {   $userId = Auth::id();
        $bill =Input::get('t_bill');
        $token= $request->stripeToken;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $bill*100,
                "currency" => "usd",
                "source" =>$token,
                "description" => "Online payment to Food Xpress.",
                
        ]);
        $c = new checkout;
        $oid =checkout::all()->last()->oid;
        $o = new onlinepayment;
            $o->amount=$bill;
            $o->description="Online payment to Food Xpress.";
            $o->o_id=$oid+1;
            $o->u_id=$userId;
            $o->stripeToken=$token;
            $o->b_paid_Status='1';
            $o->save();
        Session::flash('success', 'Payment successful! Now go back and place order');
          
        return back();
    }
}
