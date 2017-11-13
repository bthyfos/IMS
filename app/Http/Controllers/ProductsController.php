<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestData;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{

	public function index()
	{
		 return view('products.list');
	}

	public function getProducts()
	{
			return Datatables::of(TestData::query())->make(true);
		
		 // $allProducts= TestData::all();

   //    return Datatables::of($allProducts)
   //          ->make(true);
	}

	public function outOfStock()
	{
		return view('products.outOfStock');
	}
	
}
