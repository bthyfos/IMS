<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
