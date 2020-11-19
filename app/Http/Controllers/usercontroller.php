<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class usercontroller extends Controller
{
    
    function  login(Request $req)
    {
    	 $validatedData = $req->validate([
        'email' => 'required',
        'password' => 'required',
    ]); 
         

       $user = User::where(['email' => $req->email])->first();
    	if(!$user || !(Hash::check($req->password,$user->password)))
    	{
    		return "username or password is not matched"; 	
    	}
    	else{
    		 $req->session()->put('user',$user);
    		 return redirect ('/');
    	} 

    }
    function register(Request $req){

            $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            


        ]);


        
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');

    }
}
