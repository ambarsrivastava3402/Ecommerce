@extends('master')
@section('content')

<div class="custom-product">
		<div class="col=sm-10">
			<table class="table">
 
  <tbody>
    <tr>
   
      <td>Ammount</td>
      <td>{{$total}} Rs.</td>
      
    </tr>
    <tr>
      
      <td>Tax</td>
      <td>0 Rs.</td>
      
    </tr>
    <tr>
      
      <td>Delivery</td>
      <td>100 Rs.</td>
      
    </tr>
    <tr>
      
      <td>Toatal</td>
      <td>{{$total+100}} Rs.</td>
      
    </tr>
  </tbody>
</table>
<form action="/orderplace" method="post">
	@CSRF
  <div class="form-group">
    <label >Enter address</label>
    <input type="long text" name="address" class="form-control col-sm-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address"><br>
    
     <div class="form-group">
     	<label for="exampleInputEmail1">Payment Method</label><br><br>
  		<input type="radio" value="online payment" name="Payment"><span>Online payment</span><br>
  		<input type="radio" value="cash" name="Payment"><span>Cash on delivery</span><br>
  		<input type="radio" value="Emi" name="Payment"><span>Easy emi</span><br>
     </div>	

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@endsection