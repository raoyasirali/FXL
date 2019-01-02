<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\product;
use App\Review;
use Illuminate\Http\Request;
use App\product;
use Auth;
use Illuminate\Support\Facades\Input;

class ReviewController extends Controller
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

    public function showReviewScreen($id)
    {
        $proid=$id;
        session(['proID' => $proid]);         
        $rev=Review::all()->where('product_id',$proid); 
      return view ('ReviewView')->with('rev',$rev);

    }
    public function showReviewForm()
    {
        
        return view ('AddReviewForm');
    }
    public function addNewReview(){
        
        // $value = session('proID');
        // echo $value;exit();
         $userId = Auth::id();
         $r = new Review;   

        $r->review=Input::get('message');
        $r->user_name=Input::get('name');
        $r->product_id=Input::get('pro_ID');
        $pid=Input::get('pro_ID');
        $r->user_id=$userId;
        
        $r->save();
        
    
            return redirect('home');


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
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
