<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class LaravelGoogleGraph extends Controller
{
    public function index(){
    	$data= DB::table('sales')
    	->select(
    		DB::raw('Product as Product'),
    		DB::raw('count(*) as number'))
    	->groupBy('Product')
    	->get();
    	$array[]=['Product','Number'];
    	foreach ($data as $key => $value) {
    		$array[++$key]=[$value->Product,$value->number];
    	}
    	return view('google_pie_chart')->with('Product',json_encode($array));
    }
}
