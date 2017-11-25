<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;
use Yajra\DataTables\DataTables;
use Auth;

class ProductsController extends Controller
{
	public function show()
	{
		$productType  = ProductType::all();
		return view('products.index',compact('productType'));
	}
    public function index()
	{
		 return view('products.list');
	}
    public function getProducts()
	{
	        $availableStock   =Product::where('availableQty','>',0)->get();
			return Datatables::of($availableStock)->make(true);
	}
    public function outOfStock()
	{
		return view('products.outOfStock');
	}
    public function create(Request $request)
	{
			// dd($request->name);
			// die();
			$products   		      =new Product();
			$products->name 		  =$request->name;
			$products->productTypeId  =$request->productTypeId;
			$products->specification  =$request->specification;
			$products->userId         =Auth::user()->id;
			$products->intinialQty    =$request->initialQty;
			$products->availableQty   =$request->initialQty;
			$products->price   		  =$request->price;
			$products->save();
			return "saved";

	}
	public  function inavailableStockList()
    {
        $inavailableProducts    = Product::where('availableQty',0)->get();
        return Datatables::of($inavailableProducts)->make(true);
    }
	
}
