<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Activity;
use App\ProductType;
use Yajra\DataTables\DataTables;
use Auth;
use Redirect;

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
		
			$products   		      =new Product();
			$products->name 		  =$request->name;
			$products->productTypeId  =$request->productTypeId;
			$products->specification  =$request->specification;
			$products->userId         =Auth::user()->id;
			$products->initialQty    =$request->initialQty;
			$products->availableQty   =$request->initialQty;
			$products->price   		  =$request->price;
			$products->save();


			$activities               = new Activity();
			$activities->activityType =$products->id;
			$activities->createdBy    =$products->userId;
			$activities->save();

			 $notification = array(
            'message'=>'A new product was successfully added',
            'alert-type'=>'success'
          );
		return Redirect::back()->with($notification);
	}
	public  function inavailableStockList()
    {
        $inavailableProducts    = Product::where('availableQty',0)->get();
        return Datatables::of($inavailableProducts)->make(true);
    }


	
}
