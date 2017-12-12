<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SettingController extends Controller
{
	public function preference(Request $request)
   {

   	$userDetails  = User::findo($request->email);
	var_dump($userDetails);
      die();
                            // ->update(['password'=>$request->password]);
      $notification = array(
            'message'=>'Password successfully changed',
            'alert-type'=>'success'
                            );

      return back()->with($notification);
   }

}
