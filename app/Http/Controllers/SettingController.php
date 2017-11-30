<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SettingController extends Controller
{
	public function preference(Request $request)
   {

   		$userDetails  = User::where('email',Auth::user()->email)->first();
   		var_dump($userDetails->email);
   		die();
   		$preference   =$this->update($request->all());
   }

}
