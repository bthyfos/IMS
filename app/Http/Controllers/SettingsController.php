<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class SettingsController extends Controller
{

	public function index()
    {
    	$userDetails  = User::findorFail(\Auth::user()->id);
	    return view('settings.index',compact('userDetails'));
    }

   public function preference(Request $request)
   {
  
   		$userDetails  = User::where('email',$request->email)
                            ->update(['password'=>bcrypt($request->password)]);
      $notification = array(
            'message'=>'Password successfully changed',
            'alert-type'=>'success'
                            );

      return back()->with($notification);
                   
   }

}
