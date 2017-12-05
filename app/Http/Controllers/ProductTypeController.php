<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
   public function create(Request $request)
   {
   		$productType  = new productType();
   		$productType->name =$request->name;
   		$productType->save();

   		 $notification = array(
            'message'=>'A new product type was successfully added',
            'alert-type'=>'success'
          );

        return back()->with($notification);
   }
}
