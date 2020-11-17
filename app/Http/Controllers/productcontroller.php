<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
class productcontroller extends Controller
{
    //
    function show(){
    	
    	$data = Product::all();
    	return view('product' ,['products'=> $data]);
    }
     function detail($id){
        
        $data =  Product::find($id);
        return view('detail',['product'=>$data]);

     }
     function addtocart(Request $req){

     	if($req->session()->has('user'))
     	{
     		$cart = new Cart;
     		$cart->user_id=$req->session()->get('user')['id'];
     		$cart->product_id=$req->product_id;
     		$cart->save();
     		return redirect('/');
     	}
     	else{
     		return redirect('/login');
     	}

     }
    static function cartitem()
     {
       $userid = Session::get('user')['id'];
       return Cart::where('user_id',$userid)->count();
     }
}
