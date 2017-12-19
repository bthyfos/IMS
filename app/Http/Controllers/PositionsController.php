<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionsController extends Controller
{
   public function positions()
   {
       $positions =Position::query();

       return    Datatables::of($positions)
           ->addColumn('action', function ($positions) {
               return '<a href="#edit-'.$positions->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                  <a href="deletePosition/'.$positions->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a> ';
           })

           ->make(true);

   }

   public  function addPosition(Request $request)
   {

       $positionObj                 = new Position();
       $positionObj->name           =strtoupper($request->positionName);
//       $positionObj->regionId       =$request->regionId;
       $positionObj->departmentId   =$request->departmentId;
       $positionObj->save();

       $notification = array(
           'message'=>'A new Position successfully added',
           'alert-type'=>'success'
       );

       return back()->with($notification);

   }
}
