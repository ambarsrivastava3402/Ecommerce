@extends('master')
@section('content')

<div class="custom-product">
		
<div class="col=sm-10">
    <div class="trending-wrapper">
    <h3>My Orders</h3>
 
    @foreach ($orders  as $item)
    
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
            <h6>Delivery status: {{$item->status}}</h6><br>
            <h6>Payment status: {{$item->payment_method}}</h6><br>
            <h6>Address: {{$item->address}}</h6><br>
            </div>
           





        </div>
    @endforeach
	</div>
		
	

</div>
</div>




@endsection