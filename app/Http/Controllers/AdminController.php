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
//
//        Charts::create('pie', 'highcharts')
//            ->title('My nice chart')
//            ->labels(['First', 'Second', 'Third'])
//            ->values([5,10,20])
//            ->dimensions(1000,500)
//            ->responsive(false);

//        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
//            ->get();
//        $chart = Charts::database($users, 'pie')
//            ->title("Monthly new Register Users")
//            ->elementLabel("Total Users")
//            ->dimensions(900, 250)
//            ->responsive(false)
//            ->groupByMonth(date('Y'), true);

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

        $adminDetails            =User::where('email',$request->email)->first();
        $adminDetails->update(['password'=>bcrypt($request->password)]);

        return 'okay';
    }

}
