<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use Session;
use Illuminate\Support\Facades\DB;
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
     function cartlist(){

     	 $userid= Session::get('user')['id'];
     	 $products = DB::table('cart')
     	 ->join('products','cart.product_id','=','products.id')
     	 ->where('cart.user_id',$userid)
     	 ->select('products.*','cart.id as cart_id')
		 ->get();
     	 return view('cartlist',['products'=>$products]);
     }
    function removeitem($id){


    	Cart::destroy($id);
    	return	redirect('/cartlist');

    }
    function ordernow(){
    	 $userid= Session::get('user')['id'];
     	 $total =  DB::table('cart')
     	 ->join('products','cart.product_id','=','products.id')
     	 ->where('cart.user_id',$userid)
     	 ->sum('products.price');
     	 return view('ordernow',['total'=>$total]);


    }
    function orderplace(Request $req){
           
         $userid = Session::get('user')['id'];
         $allcart = Cart::where('user_id',$userid)->get();
    	 foreach($allcart As $cart)
    	 {
    	 	$order = new Order;
    	 	$order->product_id = $cart['product_id'];
    	 	$order->user_id = $cart['user_id'];
    	 	$order->status = "pending";
    	 	$order->payment_method = "cash";
    	 	$order->payment_status = "pending";
    	 	$order->address = $req->address;
    	 	$order->save();
    	 }
    	 Cart::where('user_id',$userid)->delete();
         return redirect('\myorders');
 
    }
    function myorders(){

    	 $userid= Session::get('user')['id'];
     	 $orders = DB::table('orders')
     	 ->join('products','orders.product_id','=','products.id')
     	 ->where('orders.user_id',$userid)
     	 ->get();
     	 return view('myorders',['orders'=>$orders]);
     	 
    }

}
