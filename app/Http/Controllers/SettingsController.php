<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Redirect;

class SettingsController extends Controller
{

	public function index()
    {
    	$userDetails  = User::findorFail(\Auth::user()->id);
	    return view('settings.index',compact('userDetails'));
    }

   public function preference(Request $request)
   {
       $userDetails            = User::find(\Auth::user()->id);
       $userDetails->password  = bcrypt($request->password);
       $userDetails->save();
//
//       $newPassword    = User::find(\Auth::user()->id);
//       $newPassword->userName  = $request->password;
//       $newPassword->save();


       $notification = array(
           'message'=>'Password successfully changed',
           'alert-type'=>'success');

      return Redirect::back()->with($notification);
                   
   }

}
