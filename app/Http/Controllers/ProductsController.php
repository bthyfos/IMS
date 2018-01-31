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
        $Products = Product::with('productType','user')
        					->where('availableQty','>',0)
        					->get();


        return Datatables::of($Products)
            ->addColumn('action', function ($Products) {
                return '<a href="#edit-'.$Products->id.'" class="btn btn-xs btn-primary"  onclick="getDetails()" data-target="#detailsModal" data-toggle="modal">Details</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);


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
			$products->userId         =\Auth::user()->id;
			$products->initialQty     =$request->initialQty;
			$products->availableQty   =$request->initialQty;
			$products->price   		  =$request->price;
			$products->save();


			$notification = array(
            'message'=>' New Product  added successfully',
            'alert-type'=>'success'
          			);

        $this->activity();
        return Redirect::back()->with($notification);
	}
	public  function inavailableStockList()
    {
        $inavailableProducts    = Product::where('availableQty',0)->get();
        return Datatables::of($inavailableProducts)->make(true);
    }
    protected function activity()
     {
     	$activities               = new Activity();
		$activities->activityType = 1;
		$activities->createdBy    =\Auth::user()->id;
		$activities->save();

     }

	
}
