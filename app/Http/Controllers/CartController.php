<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\checkout;
use App\product;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

        private $userId1;
        private $oid1;
        private $address1;
        private $contact1;
        private $bill1;
        private $o_Status1;





    public function viewCart(){
      $userId = Auth::id();
      $productId = session('product_id');

      $c=cart::all()->where('u_id',$userId);
      $results = DB::select( DB::raw("select carts.p_id,carts.id,products.p_Name,products.p_Desc,products.p_Img_Name,products.p_Price from (carts 
        inner join products on carts.p_id=products.id) where u_id=$userId ") );

      
      
      return view('customerCart')->with('p_data',$results);

    }

    public function placeOrder(){
        cart::truncate();
        return redirect('home')->with('msg','Order Placed Successfully');
    }

    //products added into cart table after clicking on add to cart button 
     public function addToCart($id){
       // echo $id; exit();
        session(['product_id' => $id]);
        //$value = session('cat_id');
        
       // echo $value;
       //  exit();
        $userId = Auth::id();
        $cart = new cart;
        $cart->p_id = $id;
        $cart->u_id = $userId;
        $cart ->save();
    
      return redirect ('viewCustMenuAgain')->with('msg','Item Added Into Cart');


     }

     public function checkout(){
       // echo $id; exit();
        $userId = Auth::id();
        $cart = cart::all()->where('u_id',$userId);
        $checkout = new checkout;
        
        
        $oid =checkout::all()->last()->oid;
        $address =Input::get('address');
          $contact =Input::get('contact');
          $bill =Input::get('tbill');
          $o_Status =Input::get('ostatus');
          
         $oid=$oid+1;
        // echo $oid."<br>";        
              
       $i=0;
       $lists = [];
       // $j=0;
       // echo "Product id ";
       foreach ($cart as $abc) {
        $pid[$i]=$abc->p_id;
       // echo $pid[$i]."<br>";
        $i++;
        }
// echo "Business id <br>";
        
       for ($x = 0; $x < $i; $x++) {
         $pro = product::all()->where('id',$pid[$x]);
         foreach ($pro as $res) {
           $bid[$x]= $res->b_id;


          

//Verifying data 
          // echo $bid[$x]."B ID <br>";
          // echo $checkout->oid = $oid."Order ID <br>";
          // echo $checkout->u_id = $userId."U ID <br>";
          // echo $checkout->p_id = $pid[$x]."P ID<br>";
          // echo $checkout->b_id = $bid[$x]."B ID<br>";
          // echo $checkout->address =Input::get('address')."Address <br>";
          // echo $checkout->contact =Input::get('contact')." Contact <br>";
          // echo $checkout->bill =Input::get('tbill')." Total Bill<br>";
          // echo $checkout->o_Status =Input::get('ostatus')."Order Status<br>";
          // echo "<br>";
          // $checkout->save();

             // $j++;
           }
$list[] =array('oid'=>$oid,'u_id' => $userId,'p_id' => $pid[$x],'b_id' => $bid[$x],'address' => $address,'contact' => $contact,'bill' => $bill,'o_Status' => $o_Status);
                   
        }

        //Saving data in checkout table
        checkout::insert($list);
        
        //Emptying Cart table
        cart::truncate();
        
        return redirect('home')->with('msg','Order Placed Successfully');

     }

   
     public function RemoveFromCart($id){
      
       $cart = cart::find($id);
       $cart->delete();
            return redirect('viewCart');
     }

// //online payment
    public function viewOnlineForm(){
      return view('viewOnlineForm');
    }


    

}
