<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
     use Notifiable;
    protected $fillable = [
        'name', 'email','surname', 'password','cellphone','staffId','userRoleId','departmentId','regionId','physicalAddress','dob','positionId','userName',
    ];
    protected $hidden = [
        'password', 'remember_token'
    ];
    protected $date =[
        'current_signInAt','lastLogIn'
    ];
    public function userRole()
    {
        return $this->belongsTo(UserRoles::class,'userRoleId','id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class,'positionId','id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class,'regionId','id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class,'departmentId','id');
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
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
