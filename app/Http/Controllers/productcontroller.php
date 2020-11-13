<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productcontroller extends Controller
{
    //
    function show(){
    	
    	$data = Product::all();
    	return view('product' ,['products'=> $data]);
    }
}
