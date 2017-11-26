<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    
    use RegistersUsers;
   // protected $redirectTo = '/home';

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, 
            [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'userRoleId' => 'required',
            'cellphone' => 'required',
            'departmentId' => 'required',
            'regionId' => 'required',
            'staffId' => 'required',
            'positionId' => 'required',
            'physicalAddress' => 'required',
            'dob' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
       
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'surname' => $data['surname'],
            'cellphone' => $data['cellphone'],
            'userRoleId' => $data['userRoleId'],
            'departmentId' => $data['departmentId'],
            'regionId' => $data['regionId'],
            'staffId' => $data['staffId'],
            'positionId' => $data['positionId'],
           'physicalAddress' => $data['physicalAddress'],
            'dob' => $data['dob'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
