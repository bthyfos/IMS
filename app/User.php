<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\UserRoles;
use App\Region;
use App\Departmnent;
use App\Handover;

class User extends Authenticatable
{
    
    protected $fillable = [
        'name', 'email','surname', 'password','cellphone','staffId','userRoleId','departmentId','regionId','physicalAddress','dob',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userRole()
    {
        return $this->hasOne(UserRoles::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function department()
    {
        return $this->belongsTo(Departmnent::class);
    }

    public function handover()
    {
        return $this->hasMany(Handover::class);
    }
    public function isAdmin()
    {

        if($this->userRoleId == 1)
        {
            return true;
        }
        return false;
    }
}
