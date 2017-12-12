<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Auth;

class UserController extends Controller
{
    public function index()
    {
    	$userDetails  = User::find(\Auth::user()->id);
	   return view('settings.index',compact('userDetails'));
    }
    public function update(Request $request)
    {
    	
    	$userRecord   = User::where('id',\Auth::user()->id)
    						->update(
    							[ 'regionId'=>$request->regionId,
    								'positionId'=>$request->positionId,
    								'physicalAddress'=>$request->physicalAddress,
    								'cellphone'=>$request->cellphone
    							]);

    	 $notification = array(
            'message'=>'Record Successfully updated',
            'alert-type'=>'success'
        );

        return back()->with($notification);
    }
    public function  userList()
    {
        $users = User::query();
        return  Datatables::of($users)
            ->addColumn('action', function ($users) {
                return '<a href="#edit-'.$users->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                  <a href="userDetail/'.$users->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Remove</a> ';
            })
            ->make(true);
    }
    public function userDetail($id)
    {
        $userDetail  = User::find($id)->delete();
        $notification = array(
            'message'=>'A user was  removed successfully',
            'alert-type'=>'success'
        );

        return back()->with($notification);

    }
}
