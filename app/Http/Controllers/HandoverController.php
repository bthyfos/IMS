<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestData;
use Yajra\DataTables\DataTables;

class HandoverController extends Controller
{
   public function index()
	{
		 return view('handovers.index');
	}

	public function getHandovers()
	{
			return Datatables::of(TestData::query())->make(true);
		
		 // $allProducts= TestData::all();

   //    return Datatables::of($allProducts)
   //          ->make(true);
	}
	
}
