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

     // $c=cart::all()->where('u_id',$userId);
      // $users = DB::table('carts')
      //       ->join('carts', 'carts.p_id', '=', 'products.id')
      //       ->join('products', 'users.id', '=', 'orders.user_id')
      //       ->select('products.p_Name', 'products.p_Img_Name', 'products.p_Price')
      //       ->get();

        // $c = DB::table('carts')
        // ->join('products', function ($join) {
        //     $join->on('carts.p_id', '=', 'products.id')->select('products.p_Name')
        //          ->where('carts.u_id', '=', 1);
        // })
        // ->get();
       // exit();
     //$product = cart::find('1')->product;
     //  exit();
      return view('customerCart')->with('p_data',$c);

    }

    //products added into cart table after clicking on add to cart button 
     public function addToCart($id){
          // echo $id; exit();
        
        
       // echo $value;
      //  exit();
        $userId = Auth::id();
        $cart = new cart;
        $cart->p_id = $id;
        $cart->u_id = $userId;
        $cart ->save();
    
      return redirect ('viewCustMenuAgain');


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
