<?php

namespace App\Http\Controllers;

use App\business;
use App\User;
use DB;
use PDF;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{    
	    
	    private $a_email="asd@gmail.com";
    	private $a_password="asd";
        

        public function login()
       	{
       		return view ('a_login');
       	}

        public function chkAlogin(Request $request){
        $a_email=$request->a_email;
        $a_pwd=$request->a_password;
        
        if($a_email==$this->a_email && $a_pwd==$this->a_password)
        {

            return view('a_menu');
        }
        else
            return view('a_login');
       
       }

	   public function viewBusinesses(){
       //$b = new business;
       $b = business::all();

        return view('show_businesses')->with('businesses',$b);

	   }
	    public function b_download_pdf(){
	    $business_data = DB::table('businesses')->get();
	    $pdf = PDF::loadView("a_view_business_data", ["businesses"=>$business_data]);
	    return $pdf->download("Businesses Data.pdf");
   		//return $airline_data->download("flights Data.pdf");

   	    }







}
