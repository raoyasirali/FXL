<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LaravelGoogleGraph extends Controller
{
    public function index(){
    	$data= DB::table('checkouts')
        ->join('products', 'checkouts.p_id', '=', 'products.id')
    	->select(
    		DB::raw('products.p_Name as Product'),
    		DB::raw('count(*) as number'))
    	->groupBy('Product')
        ->where('o_Status','1')
    	->get();
    	$array[]=['Product','Number'];
    	foreach ($data as $key => $value) {
    		$array[++$key]=[$value->Product,$value->number];
    	}
    	return view('google_pie_chart')->with('Product',json_encode($array));
    }
}
