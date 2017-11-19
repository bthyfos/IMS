<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Input;
use Yajra\DataTables\DataTables;

class HandoverController extends Controller
{
   public function index()
	{
		 return view('handovers.index');
	}

	public function getHandovers()
	{
			return Datatables::of(Product::query())->make(true);
		
		 // $allProducts= TestData::all();

   //    return Datatables::of($allProducts)
   //          ->make(true);
	}
	public function recipients()
	{
		$queryString   =Input::get('queryString');
		$recipients         =User::where('name','like','%'.$queryString.'%')
									->get();
		return response()->json($recipients);
	}
	
}
