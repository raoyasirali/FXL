<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $file=Input::file('p_image');
        $file->move('uploads/',$file->getClientOriginalName());
        $p_image= $file->getClientOriginalName();
        $p = new product;   
        $p->p_Name=Input::get('p_name');
        $p->p_Desc=Input::get('p_description');
        $p->p_Img_Name= $p_image;
        $p->p_Price=Input::get('p_price');
        // $p->b_id=Input::get('name');
        $p->c_id=Input::get('p_category');
        $p->save();
        return redirect('b_menu');
    }

    public function deleteProduct($id){
    // {   echo $id;
        // $p = new product; 
        $p=product::find($id);
        $p->delete();
        return redirect('b_home');

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
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function viewProduct()
    {
        $p=product::all();
        return view('p_view_p')->with('p_data',$p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
