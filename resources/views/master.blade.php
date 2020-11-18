<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce project</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	{{View::make('header')}}
	@yield('content')
    {{View::make('footer')}}

</body>
<style >
	.custom-login{
		height: 500px;
		padding-top: 100px;
	}
	img.slider-img{
		height: 400px !important
	}
	.custom-product{
		height: 500px;
		
	}
	.trending-image{
		height: 100px;
	}
	.trending_item{
		float: left;
		width: 20%

	}
	.trending-wrapper{
		margin: 30px;
	}
	.detail-img{
		height: 200px;
	}
	.cart-list-devider{
		border-bottom: 1px solid #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px
	}

	
</style>
</html>