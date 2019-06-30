<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    //
    function index()
    {
    	return view ('send_email');
    }
    public function send(Request $request){
    
    	$data = array (
          'name'     =>  $request->name,
          'message'  =>  $request->message,
          'email'    =>  $request->email
    	);
    	Mail::to('Team_FoodXpress@gmail.com') -> send(new SendMail($data));
    	return back()->with('success', 'Thanks for contacting us');

    }
    public function report(Request $request){
    
      $data = array (
          'name'     =>  $request->name,
          'message'  =>  $request->message,
          'email'    =>  $request->email
      );
      Mail::to('Team_FoodXpress@gmail.com') -> send(new SendMail($data));
      return back()->with('success', 'Thanks for contacting us');

    }
   
}
