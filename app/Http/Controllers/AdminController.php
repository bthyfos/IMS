<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
    public function systemUsers()
    {
    	return view('admin.systemUsers');
    }
    public function registration()
    {
    	return view('admin.register');
    }

    public function  adminDetails()
    {

    }
    public function  changePassword(Request $request)
    {

        $adminDetails            =User::where('email',$request->email)->first();
        $adminDetails->update(['password'=>bcrypt($request->password)]);

        return 'okay';
    }

}
