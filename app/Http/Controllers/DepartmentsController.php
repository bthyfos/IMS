<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Department;

class DepartmentsController extends Controller
{
    public function departments()
    {
       // $availableStock   =Department::where('availableQty','>',0)->get();
        return Datatables::of(Department::query())->make(true);
    }

    public function addDepartment(Request $request)
    {
        $departmentObj            = New Department();
        $departmentObj->name      = $request->departmentName;
        $departmentObj->regionId  = $request->regionId;
        $departmentObj->save();
         return "saved dept";

    }
}
