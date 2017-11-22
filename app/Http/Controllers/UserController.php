<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
    	$userDetails  = User::find(\Auth::user()->id);
	   return view('settings.index',compact('userDetails'));
    }

    public function update(Request $request)
    {
    	
    	$userRecord   =User::where('id',\Auth::user()->id)
    						->update(
    							[ 'regionId'=>$request->regionId,
    								'positionId'=>$request->positionId,
    								'physicalAddress'=>$request->physicalAddress,
    								'cellphone'=>$request->cellphone
    							]);

    	return "record update";
    }
}
