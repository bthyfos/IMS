<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Redirect;

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
                'email' => 'required|string|email|max:255|unique:users'
        ]);
    }

    protected function create(array $data)
    {

        $generateUserPassword   = $this->generateRandomString();
        return User::create([
            'name' => strtoupper($data['name']),
            'email' => $data['email'],
            'surname' => strtoupper($data['surname']),
            'cellphone' => $data['cellphone'],
            'userRoleId' => $data['userRoleId'],
            'departmentId' => $data['departmentId'],
            'regionId' => $data['regionId'],
            'staffId' => $data['staffId'],
            'positionId' => $data['positionId'],
            'physicalAddress' => strtoupper($data['physicalAddress']),
            'dob' => $data['dob'],
            'userName' => $generateUserPassword,
            'password' => bcrypt($generateUserPassword),
        ]);

    }

    public function generateRandomString()
    {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 6; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass);

    }
    public function goBack()
    {
        $notification = array(
            'message'=>'A new is added.',
            'alert-type'=>'success'
        );

        return Redirect::back()->with($notification);

    }

}
