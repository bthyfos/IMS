<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Yajra\DataTables\DataTables;

class RegionController extends Controller
{
    public function getRegions()
   {
       return Datatables::of(Region::query())->make(true);
   }
    public function regions()
    {
        return view('regions.list');
    }
    public function addRegion(Request $request)
    {
        $regionObj         = new Region();
        $regionObj->name   = ucfirst($request->region);
        $regionObj->save();

        return "saved";
    }
}
