<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;
use Auth;
use DB;

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
     public function RemoveFromCart($id){
      
       $cart = cart::find($id);
       $cart->delete();
            return redirect('viewCart');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
