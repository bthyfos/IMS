<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Input;
use Yajra\DataTables\DataTables;

class HandoverController extends Controller
{
   public function index()
	{
		 return view('handovers.index');
	}

	public function getHandovers()
	{
			return Datatables::of(Product::query())->make(true);
		
		 // $allProducts= TestData::all();

   //    return Datatables::of($allProducts)
   //          ->make(true);
	}
	public function recipients($query)
	{
		// $queryString        =Input::get('query');
		// $recipients         =User::where('name','like','%'.$queryString.'%')
		// 							->get();
		// return response()->json($recipients);
       

       // $query =Input::get('query');
       // var_dump($query);
       // die();

		// $searchString    = Input::get('query');
       $searchString     =  $query;
        $recipients      = \DB::table('users')
            ->whereRaw(
                "CONCAT(`users`.`id`, ' ', `users`.`name`,' ', `users`.`surname`) LIKE '%{$searchString}%'")
            ->select(
                array
                (
                    'users.id as id',
                    'users.name as name',
                    'users.surname as surname', 
                )
            )
            ->get();
        $data = array();
        foreach ($recipients as $recipient) {
            $data[] = array(
                "name" => "{$recipient->name} {$recipient->surname}",
                "id" => "{$recipient->id}"
            );
        }
        return $recipients;
	}
	
}
