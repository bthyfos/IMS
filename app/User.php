<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\UserRoles;
use App\Region;
use App\Department;
use App\Handover;

class User extends Authenticatable
{
     use Notifiable;
    protected $fillable = [
        'name', 'email','surname', 'password','cellphone','staffId','userRoleId','departmentId','regionId','physicalAddress','dob','positionId',
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
        return $this->belongsTo(Department::class);
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
