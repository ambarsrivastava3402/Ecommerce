<?php
use App\Http\Controllers\productcontroller; 
$total=0;
if(Session::has('user'))
{
  $total = productcontroller::cartitem();
}
?>
@extends('master')
@section('content')

<div class="custom-product">
		
<div class="col=sm-10">
    <div class="trending-wrapper">
    <h3>Result for products</h3>
    @if($total== 0)
    
      
 <a href="#" class="disabled btn btn-success" >Order Now</a><br><br>
    
    @else


    <a href="/ordernow" class="btn btn-success" >Order Now</a><br><br>
    @foreach ($products as $item)
    
      <div class=" row searched-item cart-list-devider">

      		<div class="col-sm-3">
       			<a href="detail/{{$item->id}}">
		        <img class="trending-image" src="{{$item->gallery}}">
		        <div class="">
		        <h5>{{$item->name}}</h5>
		        </div>
                </a>
            </div>
            <div class="col-sm-3">
       			<h5>{{$item->category}}</h5>
            </div>
            <div class="col-sm-3">
       			<h5>Price:{{$item->price}}</h5>
            </div>
            <div class="col-sm-3">
            <a href="/removeitem/{{$item->cart_id}}" class="btn btn-danger" >Remove from cart</a>
            </div>





        </div>
    @endforeach
@endif
	</div>
		
	

</div>
</div>




@endsection