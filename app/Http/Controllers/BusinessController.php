<?php

namespace App\Http\Controllers;

use App\business;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

class BusinessController extends Controller
{

    // $b_id=session('b_id');

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

    
    public function bregister(){
      $b = new business;
      $b->b_Name=Input::get('b_name');
      $b->b_Address=Input::get('b_address');
      $b->b_Fname=Input::get('b_first_name');
      $b->b_Lname=Input::get('b_last_name');
      $b->b_Phone=Input::get('b_phone');
      $b->b_Email=Input::get('b_email');
      $b->c_id=Input::get('b_category');
      // $b->b_Pwd=Input::get('b_password');
      $p=Input::get('b_password');
      $password= md5($p);
      $b->b_Pwd=$password;
      $b->save();
        
        return redirect('b_login')->with('success', 'Signup Successfull !! Login Now');
    }    

    public function resetPwd(Request $request){
      $b_email=$request->b_email;
      $b_phone=$request->b_phone;
      $p=$request->b_password;
      $b_pwd=md5($p);
      $b_data=DB::table('businesses')->where('b_Email', $b_email)->where('b_Phone', $b_phone)->update(['b_Pwd' => $b_pwd]);
      // $b_data= DB::update('update businesses set b_Pwd = $b_pwd where b_Email=$b_email and b_Phone= $b_phone');

        return redirect('b_login')->with('success', 'Password Reset Successfull !! Login Now');
    }    
    
    

    public function chkBlogin(Request $request){
        $b_email=$request->b_email;
        $p=$request->b_password;
        $b_pwd=md5($p);
        $b_data=DB::table('businesses')->where('b_Email',$b_email)->Where('b_Pwd',$b_pwd);
        $b_id = DB::table('businesses')->select('id')->where('b_Email',$b_email)->Where('b_Pwd',$b_pwd)->get();
        session(['b_id' => $b_id]);
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
