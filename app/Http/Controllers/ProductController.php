<?php

namespace App\Http\Controllers;

use App\product;
use App\cart;
use App\checkout;
use App\Review;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Auth;
use DB;
use Cookie;

class ProductController extends Controller
{

    //Save products into database by business admin after filling add product form on its dashboard.
    private $bud;

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
        $p->b_id=Input::get('b_id');

        $p->c_id=Input::get('p_category');
        $p->save();
        return redirect('b_menu');
    }


      //View product on customer dashboard according to selected category from drop down
    public function ViewProducts(Request $request){
 //by cat id
        // $cat_id = $request->p_category;
        // session(['cat_id' => $cat_id]);
        // $p=product::all()->where('c_id',$cat_id);
        // return view('customer_products')->with('p_data',$p);

//search by name
        $search_name = $request->p_category;
        $user_area = $request->carea;
        session(['search_name' => $search_name]);
        session(['check' => '1']);
        session(['user_area' => $user_area]);
       $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea') 
            ->where('p_Name', $search_name)
            ->where('b_DArea', $user_area)
            ->get();

        // $p=product::all()->where('p_Name',$search_name);
        return view('customer_products')->with('p_data',$p);

     }

    public function deleteProduct($id){
        DB::table('reviews')->where('product_id', '=', $id)->delete();
        $p=product::find($id);
        $p->delete();
        return redirect('b_home');

   }
  
    

  // menu again to customer  working same as ViewProducts
     public function ViewMenu(){
        

         $user_area = Cookie::get('user_area');
         // $check = session('bud');
         $check=session('check');
        

         if ($check == 1) { //search menu again
            $search_name = session('search_name');
            $user_area = session('user_area');
            $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea') 
            ->where('p_Name', $search_name)
            ->where('b_DArea', $user_area)
            ->get();
         }

         if ($check == 2) {
           $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea') 
            ->where('b_DArea',$user_area)
            ->get();
         }

         if ($check == 3) { // to view promotion items again
           $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea')
            ->where('p_Status','1')
            ->where('b_DArea',$user_area)
            ->get();
            
         }

        if ($check == 4) {                 // to print budget items again in ascending order
           $search_name = session('bud_search_name');
           $budget = session('budget');
           $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea')
            ->orderBy('p_Price', 'ASC')
            ->where('p_Name',$search_name)
            ->where('p_Price', '<=' , $budget)
            ->where('b_DArea',$user_area) 
            ->get();
         
        }
       // else {
       //  $p=product::all()->where('p_Name',$search_name);
       //  }
        return view('customer_products')->with('p_data',$p);

     }

     //view all category products to customer
     public function AllCatProducts(){
          // $pr=product::all();
          // return view('all_products')->with('p_data',$pr);
            $user_area = Cookie::get('user_area');
            // echo $user_area;
            // exit();
            session(['check' => '2']);
          $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea') 
            ->where('b_DArea',$user_area)
            ->get();
          return view('customer_products')->with('p_data',$p);

     }

         public function AllProProducts(){
          // $pr=product::all();
          // return view('all_products')->with('p_data',$pr);
          $user_area = Cookie::get('user_area');
          session(['check' => '3']);
          $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea')
            ->where('p_Status','1')
            ->where('b_DArea',$user_area)
            ->get();
          return view('customer_products')->with('p_data',$p);

     }

//ViewBudgetProducts
        public function searchBProducts(Request $request){
           echo $this->bud;
           // $n=1;
           session(['check' => '4']);
           // Session::put('variable', $n);
           
           // $this->bud=$n; 
           // echo $this->bud;
           // exit();
           $user_area = Cookie::get('user_area');
           $search_name = $request->search;
           $budget = $request->budget;
           session(['bud_search_name' => $search_name]);
           // session(['bud' => $n]);
           session(['budget' => $budget]);

           $p=DB::table('products')
            ->join('businesses', 'products.b_id', '=', 'businesses.id')
            ->orderBy('p_Price', 'ASC')
            ->select('products.*', 'businesses.b_Name', 'businesses.b_Address', 'businesses.b_DArea') 
            ->where('p_Name',$search_name)
            ->where('p_Price', '<=' , $budget)
            ->where('b_DArea',$user_area)
            ->get();
            // product::orderBy('p_Price', 'ASC')->where('p_Name',$search_name)->where('p_Price', '<=' , $budget)->get();
           return view('customer_products')->with('p_data',$p);
           // $pr=product::all();
           // return view('all_products')->with('p_data',$pr);
            // echo "Budget page";
            // exit();

     }
     


    //show products to business dashboard according to its business Id.
    public function viewProduct()
    {
        $value = session('business_id'); 
        $p=product::all()->where('b_id',$value);
        return view('p_view_p')->with('p_data',$p);
    }

   
    public function showEditProduct($id){
         $p=product::find($id);
        return view('p_edit_p')->with('p',$p);
    }

     public function updateProduct(Request $request,$id){
        $p = new product;         
        $p=product::find($id); 
        $p->p_Name=$request->p_name;
        $p->p_Desc=$request->p_description;
        // $p->p_Img_Name=$request->p_image;
        $p->p_Price=$request->p_price;
        $p->c_id=$request->p_category;

        $p->save();
        return redirect('p_view_p');

    }

    //promotion
    public function showPromoProduct($id){
         $p=product::find($id);
        return view('p_Proedit_p')->with('p',$p);
    }

    

    public function addpromoProduct(Request $request,$id){
        $p = new product;         
        $p=product::find($id); 
        $p->p_Name=$request->p_name;
        $p->p_Desc=$request->p_description;
        // $p->p_Img_Name=$request->p_image;
        $price=$request->p_price;
        $p->p_Status='1';
        $p->p_Percent=$request->p_Percent;
        $percent=$request->p_Percent;
        $percentprice=($price*$percent)/100;
        $p->p_Percent_Price=$percentprice;
        $p->p_date=$request->p_proDate;
        $p->p_PrePrice=$request->p_price;
        $p->p_Price=$price-$percentprice;
        $p->save();
        return redirect('p_view_p');

    }

    //View promotion items by business admin

    public function bviewProProduct()
    {
        $value = session('business_id'); 
        $p=product::all()->where('b_id',$value)->where('p_Status','1');
        return view('b_pro_view_p')->with('p_data',$p);
    }
   


   public function removeProProduct($id){
        // DB::table('reviews')->where('product_id', '=', $id)->delete();
        $p=product::find($id);
        $p->p_Status='0';
        $p->p_Percent='NULL';
        $p->p_Percent_Price='0';
        $p->p_date='NULL';
        $p->p_Price=$p->p_PrePrice;
        $p->p_PrePrice='0';
        $p->save();
        return redirect('b_pro_view_p');

   }


    public function userOrderHistory(){
      $user = Auth::id();
      $s = DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->join('businesses', 'checkouts.b_id', '=', 'businesses.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price', 'businesses.b_name', 'businesses.b_Address', 'businesses.b_Phone')->orderBy('oid', 'DESC')
            ->where('o_Status', '1')
            ->where('u_id', $user)
            ->get();
      return view('u_order_history')->with('sales',$s);
    }

    public function userCancelOrderPage(){
      $user = Auth::id();
      $s = DB::table('checkouts')
            ->join('users', 'checkouts.u_id', '=', 'users.id')
            ->join('products', 'checkouts.p_id', '=', 'products.id')
            ->join('businesses', 'checkouts.b_id', '=', 'businesses.id')
            ->select('checkouts.*', 'users.name', 'users.email', 'products.p_Name', 'products.p_Price', 'businesses.b_name', 'businesses.b_Address', 'businesses.b_Phone')->orderBy('oid', 'DESC')
            ->where('o_Status', '0')
            ->where('u_id', $user)
            ->get();
      return view('u_cancel_order')->with('sales',$s);
    }

    public function userCancelOrder($oid){
        //deleting multiple rows
        $c=checkout::where('oid',$oid)->get(['id']);
        checkout::destroy($c->toArray());
        // $c->delete();
        return redirect('orderCancel');

   }

   function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('products')
        ->where('p_Name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->p_Name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
    
}
