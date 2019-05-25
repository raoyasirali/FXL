<?php

namespace App\Http\Controllers;
use Google\Cloud\Core\ServiceBuilder;
//use App\Http\Controllers\product;
use App\Review;
use Illuminate\Http\Request;
use App\product;
use Auth;
use Illuminate\Support\Facades\Input;
use SentimentAnalysis;
// use Illuminate\Support\Facades\SentimentAnalysis;

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

    public function showAllReviewScreen()
    {
        $proid=session('proID');
        // session(['proID' => $proid]);         
        $rev=Review::all()->where('product_id',$proid); 
        return view ('ReviewView')->with('rev',$rev);

    }

    public function showPosReviewScreen()
    {
        $proid=session('proID');
        // session(['proID' => $proid]);         
        $rev=Review::all()->where('product_id',$proid)->where('pos','1'); 
        return view ('ReviewView')->with('rev',$rev);

    }

    public function showNegReviewScreen()
    {
        $proid=session('proID');
        // session(['proID' => $proid]);         
        $rev=Review::all()->where('product_id',$proid)->where('neg','1'); 
        return view ('ReviewView')->with('rev',$rev);

    }

    public function showNeuReviewScreen()
    {
        $proid=session('proID');
        // session(['proID' => $proid]);         
        $rev=Review::all()->where('product_id',$proid)->where('neu','1'); 


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
        $sentense=$r->review;
        $r->user_name=Input::get('name');
        $r->product_id=Input::get('pro_ID');
        $pid=Input::get('pro_ID');
        $r->user_id=$userId;
        $sentence=$r->review;
        // echo $sentence;
        // $s = new SentimentAnalysis;
         $s = new SentimentAnalysis();
         //$analysis = new SentimentAnalysis(storage_path('custom_dictionary/'));//for custom dictionary
         $neg= $s->isNegative($sentence);
         $neu=$s->isNeutral($sentence);
         $pos=$s->isPositive($sentence);
         $r->neg=$neg;
         $r->pos=$pos;
         $r->neu=$neu;

          // echo "Negative:".$neg."<br/>";
          // echo  "Neutral:".$neu."<br/>";
          // echo  "Positive:".$pos."<br/>";
        // $s = SentimentAnalysis::isNegative($sentence);
        
        // exit();
        $r->save();
        
    
            return redirect('AllReview');


    }

   public function sentiment(){
    $cloud = new ServiceBuilder([
            'keyFilePath' => base_path('FoodXpress.json'),
            'projectId' => 'foodxpress1'
        ]);

        $language = $cloud->language(); 

        // The text to analyse
        $text = 'I hate this - why did they not make provisions?';

        // Detect the sentiment of the text
        $annotation = $language->analyzeSentiment($text);
        $sentiment = $annotation->sentiment();

        echo 'Sentiment Score: ' . $sentiment['score'] . ', Magnitude: ' . $sentiment['magnitude'];
   
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
