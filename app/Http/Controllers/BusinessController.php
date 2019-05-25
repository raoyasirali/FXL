<?php

namespace App\Http\Controllers;

use App\business;
use App\checkout;
use DB;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class BusinessController extends Controller
{

    
    public function showLoginPage(){
        return view("b_login");
    }
    
     public function showSignupPage(){
        return view("b_signup");
    }

     public function showResetpwdPage(){
        return view("b_resetpwd");
    }    

    public function showAddPage(){
        return view("b_add_p");
       
    }

    public function showHome(){
        return redirect("b_menu");
    }

    
    public function bregister(){
      $b = new business;
      $b->b_Name=Input::get('b_name');
      $b->b_Address=Input::get('b_address');
      $b->b_Fname=Input::get('b_first_name');
      $b->b_Lname=Input::get('b_last_name');
      $b->b_Phone=Input::get('b_phone');
      $b->b_Email=Input::get('b_email');
      $b->c_id=Input::get('b_category');
      $b->b_Status=Input::get('b_status');
      // $b->b_Pwd=Input::get('b_password');
      $p=Input::get('b_password');
      $password= md5($p);
      $b->b_Pwd=$password;
      $b->save();
        
        return redirect('b_login')->with('success', 'Signup Successfull !! Wait for Approval!');
    }    

    public function resetPwd(Request $request){
      $b_email=$request->b_email;
      $b_phone=$request->b_phone;
      $p=$request->b_password;
      $b_pwd=md5($p);
      $b_data=DB::table('businesses')->where('b_Email', $b_email)->where('b_Phone', $b_phone)->update(['b_Pwd' => $b_pwd]);
      

        return redirect('b_login')->with('success', 'Password Reset Successfull !! Login Now');
    }    
    
    

    public function chkBlogin(Request $request){
        $b_email=$request->b_email;
        $p=$request->b_password;
        $b_pwd=md5($p);
        $b_data=DB::table('businesses')->where('b_Email',$b_email)->Where('b_Pwd',$b_pwd)->Where('b_Status','1');
        $b_id = DB::table('businesses')->select('id')->where('b_Email',$b_email)->Where('b_Pwd',$b_pwd)->get();
        // session(['b_id' => $b_id]);
        foreach( $b_id as $row ){
           $bu_id = $row->id;
        }
        
        $b_count=$b_data->count();
        if( $b_count>0 ){
         session(['business_id' => $bu_id]);

            return view('b_menu');
        }
        else
            return view('b_login');
       
    }

    public function showSales(){
        $b_id = session('business_id');
        // $s = DB::table('sales')->where('b_id',$value)->get();
        $s =DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price') 
            ->orderBy('oid', 'DESC')
            ->where('checkouts.b_id', $b_id)
            ->where('o_Status', '1')
            ->get();
        return view('b_show_sales')->with('sales',$s);

    }

    public function b_s_download_excel()
         {
           $b_id = session('business_id');
           $sales_data = DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price') 
            ->orderBy('oid', 'DESC')
            ->where('checkouts.b_id', $b_id)
            ->where('o_Status', '1')->get()->toArray();







           $sales_array[] = array('Order Id', 'Customer Name', 'Email', 'Contact No', 'Address', 'Item Name', 'Price', 'Date & Time');
           foreach($sales_data as $s_data)
           {
            $sales_array[] = array(
             'Order Id'  => $s_data->oid,
             'Customer Name'   => $s_data->name,
             'Email'    => $s_data->email,
             'Contact No'    => $s_data->contact,
             'Address'    => $s_data->address,
             'Item Name'    => $s_data->p_Name,
             'Price'    => $s_data->p_Price,
             'Date & Time'    => $s_data->updated_at,
             // 'b_id'    => $s_data->b_id,
         
            );
           }
           Excel::create('Sales Data', function($excel) use ($sales_array){
            $excel->setTitle('Sales Data');
            $excel->sheet('Sales Data', function($sheet) use ($sales_array){
             $sheet->fromArray($sales_array, null, 'A1', false, false);
            });
           })->download('xlsx');

         }

         public function viewOrderRequests(){
          //$b = new business;
            $b_id = session('business_id');
          //running query
          // $o = DB::table('checkouts')->where('o_Status', '0')->where('b_id', $b_id)->get();
        


          // foreach($o as $s_data)
          //  {
          //   $id_array[] = array('id'  => $s_data->id);
          //  }

//Joins on Checkout+Users+Product Table

$results = DB::table('checkouts')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->select('checkouts.*', 'products.p_Name', 'products.p_Desc', 'products.p_Price', 'users.name')
            ->orderBy('oid', 'DESC')
            ->where('checkouts.b_id', $b_id)
            ->where('o_Status', '0')
            ->get();
      
      
      // return view('customerCart')->with('p_data',$results);





  return view('o_view_o')->with('checkouts',$results);
          // return view('o_view_o')->with('checkouts',$o);

          }

        public function approveOrder($id){
        $o = new checkout;
        $o = checkout::find($id);
        $o->o_Status='1';
        $o->save();
        return redirect('o_view_o');

          }

       public function disapproveOrder($id){
        $o = new checkout;
        $o = checkout::find($id);
        $o->delete();
        return redirect('o_view_o');

          }


    
}
