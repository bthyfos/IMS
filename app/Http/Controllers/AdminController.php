<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Charts;
use DB;
use App\Activity;

class AdminController extends Controller
{
    public function index()
    {

        $chart =  Charts::create('pie', 'highcharts')
            ->title('Pie chart of the Product')
            ->labels(['First', 'Second', 'Third'])
            ->values([5,10,20])
            ->dimensions(800,450)
            ->responsive(true);

    $activities =Activity::all();

    	return view('admin.home',compact('chart','activities'));
    }
    public function systemUsers()
    {
    	return view('admin.systemUsers');
    }
    public function registration()
    {
    	return view('admin.register');
    }

    public function  adminDetails()
    {

    }
    public function  changePassword(Request $request)
    {

    $userDetails  = User::where('email',$request->email)
                            ->update(['password'=>bcrypt($request->password)]);
      $notification = array(
            'message'=>'Password successfully changed',
            'alert-type'=>'success'
                            );

      return back()->with($notification);
    }

}
