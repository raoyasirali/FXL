<?php

namespace App\Http\Controllers;

use App\business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(business $business)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, business $business)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(business $business)
    {
        //
    }
}
