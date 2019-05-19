<?php

namespace App\Http\Controllers;

use App\product;
use App\cart;
use App\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Auth;
use DB;

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

//by name
        $search_name = $request->p_category;
        session(['search_name' => $search_name]);
        $p=product::all()->where('p_Name',$search_name);
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
        

         $search_name = session('search_name');
         $check = session('bud');
         $budget = session('budget');
        if ($check == 1) {              // to print again in ascending order
          $p=product::orderBy('p_Price', 'ASC')->where('p_Name',$search_name)->where('p_Price', '<=' , $budget)->get();
          
        }
       else {
        $p=product::all()->where('p_Name',$search_name);
        }
        return view('customer_products')->with('p_data',$p);

     }

     //view all category products to customer
     public function AllCatProducts(){
          // $pr=product::all();
          // return view('all_products')->with('p_data',$pr);
          $p=product::all();
          return view('customer_products')->with('p_data',$p);

     }


//ViewBudgetProducts
        public function searchBProducts(Request $request){
           echo $this->bud;
           $n=1;
           // Session::put('variable', $n);
           
           // $this->bud=$n; 
           // echo $this->bud;
           // exit();
           $search_name = $request->search;
           $budget = $request->budget;
           session(['search_name' => $search_name]);
           session(['bud' => $n]);
           session(['budget' => $budget]);
           $p=product::orderBy('p_Price', 'ASC')->where('p_Name',$search_name)->where('p_Price', '<=' , $budget)->get();
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



    
}
