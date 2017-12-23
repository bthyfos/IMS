<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Yajra\DataTables\DataTables;

class RegionController extends Controller
{
    public function getRegions()
   {
    $region     =Region::query();   // return Datatables::of(Region::query())
    return Datatables::of($region)
       ->addColumn('action', function ($region) {
                return '<a href="#edit-'.$region->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                  <a href="deleteRegion/'.$region->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a> ';
            })
      
            ->make(true);
   }
    public function regions()
    {
        return view('regions.list');
    }
    public function addRegion(Request $request)
    {
        $regionObj         = new Region();
        $regionObj->name   = strtoupper($request->region);
        $regionObj->save();

        $notification = array(
            'message'=>'A new region added successfully ',
            'alert-type'=>'success'
          );

        return back()->with($notification);
    }

    public function deleteRegion($id)
    {
   
      $region = Region::find($id)->delete();

      $notification = array(
            'message'=>'A region deleted successfully',
            'alert-type'=>'success'
          );

        return back()->with($notification);
    }
}
