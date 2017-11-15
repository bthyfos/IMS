<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;

class LoginController extends Controller
{
    public function login(Request $request)
    {

    	if(Auth::attempt([
    		'email'=>$request->email,
    		'password'=>$request->password
    		]))

    		{
    			$user = User::where('email',$request->email)->first();
    			if($user->isAdmin())
    			{
    				return Redirect::to('/admin');
    			}

    			return  Redirect::to('/');

    		}

    		return Redirect()->back();
    }
}
