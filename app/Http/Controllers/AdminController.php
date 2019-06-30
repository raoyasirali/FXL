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

     public function viewSignupRequests(){
       //$b = new business;
       $b = DB::table('businesses')->where('b_Status', '0')->get();
        return view('a_show_signuprequests')->with('businesses',$b);

     }

      public function approveBusinesses($id){
        $b = new business;
        $b = business::find($id);
        $b->b_Status='1';
        $b->save();
        return redirect('b_signup_request');

     }

       public function disapproveBusinesses($id){
        $b = new business;
        $b = business::find($id);
        $b->delete();
        return redirect('b_signup_request');

     }

	    public function b_download_pdf(){
	    $business_data = DB::table('businesses')->get();
	    $pdf = PDF::loadView("a_view_business_data", ["businesses"=>$business_data]);
	    return $pdf->download("Businesses Data.pdf");
   		//return $airline_data->download("flights Data.pdf");

   	  }



      public function deleteBusinesses($id){
       //$b = new business;
        $b = business::find($id);
        $b->delete();
        return redirect('b_details_pdf');

     }


      public function viewCustomers(){
       //$b = new business;
       $c = User::all();

        return view('a_show_customers')->with('customers',$c);

     }


      public function c_download_pdf(){
      $customer_data = DB::table('users')->get();
      $pdf = PDF::loadView("a_view_customer_data", ["customers"=>$customer_data]);
      return $pdf->download("Customer Data.pdf");
      //return $airline_data->download("flights Data.pdf");

      }

       public function deleteCustomers($id){
       //$b = new business;
        $c = User::find($id);
        $c->delete();
        return redirect('c_details_pdf');

     }


       public function viewSales(){
       //$b = new business;
       $s = DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->join('businesses', 'checkouts.b_id', '=', 'businesses.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price', 'businesses.b_name', 'businesses.b_Address', 'businesses.b_Phone', 'businesses.b_Fname')
            ->orderBy('oid', 'DESC')
            ->where('o_Status', '1')
            ->get();
       // $s = DB::table('sales')->get();
        return view('show_sales')->with('sales',$s);

     }
      public function s_download_excel()
         {
           $sales_data = DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->join('businesses', 'checkouts.b_id', '=', 'businesses.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price', 'businesses.b_name', 'businesses.b_Address', 'businesses.b_Phone', 'businesses.b_Fname')
            ->orderBy('oid', 'DESC')
            ->where('o_Status', '1')
            ->get();

           $sales_array[] = array('Order Id', 'Business Name', 'Business Address', 'Business Owner Name', 'Business Contact No.', 'Customer Name', 'Email', 'Contact No', 'Address', 'Item Name', 'Price', 'Date & Time');
           foreach($sales_data as $s_data)
           {
            $sales_array[] = array(
             'Order Id'  => $s_data->oid,
             'Business Name'   => $s_data->b_name,
             'Business Address'    => $s_data->b_Address,
             'Business Owner Name'    => $s_data->b_Fname,
             'Business Contact No'    => $s_data->b_Phone,
             'Customer Name'   => $s_data->name,
             'Email'    => $s_data->email,
             'Contact No'    => $s_data->contact,
             'Address'    => $s_data->address,
             'Item Name'    => $s_data->p_Name,
             'Price'    => $s_data->p_Price,
             'Date & Time'    => $s_data->updated_at,
         
            );
           }
           Excel::create('Sales Data', function($excel) use ($sales_array){
            $excel->setTitle('Sales Data');
            $excel->sheet('Sales Data', function($sheet) use ($sales_array){
             $sheet->fromArray($sales_array, null, 'A1', false, false);
            });
           })->download('xlsx');

         }






}
