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


          $department  =  Department::query();
            return    Datatables::of($department)
                ->addColumn('action', function ($department) {
                return '<a href="#edit-'.$department->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                  <a href="deleteDepartment/'.$department->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a> ';
            })

            ->make(true);
    }
    public function addDepartment(Request $request)
    {
        $departmentObj            = New Department();
        $departmentObj->name      = strtoupper($request->departmentName);
        $departmentObj->regionId  = $request->regionId;
        $departmentObj->save();

        $notification = array(
            'message'=>'A new Department was successfully added',
            'alert-type'=>'success'
                           );

        return back()->with($notification);

    }

    public function delete($id)
    {
        $department   =Department::find($id)->delete();
        $notification = array(
            'message'=>'A Department deleted  successfully',
            'alert-type'=>'success'
        );

        return back()->with($notification);


    }
}
