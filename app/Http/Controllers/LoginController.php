<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Redirect;
use Yajra\DataTables\DataTables;

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
    				return Redirect::to('/dashboard');
    			}

    			return  Redirect::to('/');

    		}

    		return Redirect()->back();
    }

    public function lastLogin()
    {
        $lastLogin    = User::select('name','surname','lastLogin','regionId','departmentId')->get();
        return Datatables::of($lastLogin)->make(true);
    }

}
