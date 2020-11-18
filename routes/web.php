<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
route::view('/login','login');
route::view('/register','registration');

route::post('/registration','usercontroller@register');
route::post('/login','usercontroller@login');
route::get('/','productcontroller@show');
route::get('/detail/{id}','productcontroller@detail');
route::post('/add_to_cart','productcontroller@addtocart');
Route::get('/logout', function () {

	Session::forget('user');
    return redirect('/login');
});
route::get('/cartlist','productcontroller@cartlist');
route::get('/removeitem/{id}','productcontroller@removeitem');
route::get('/ordernow','productcontroller@ordernow');
route::post('/orderplace','productcontroller@orderplace');
route::get('/myorders','productcontroller@myorders');



