<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class ProductTypeController extends Controller
{
   public function create(Request $request)
   {
   		$productType  = new ProductType();
   		$productType->name =strtoupper($request->name);
   		$productType->save();

   		 $notification = array(
            'message'=>'Product Type added successfully',
            'alert-type'=>'success'
          );

        return back()->with($notification);
   }
}
