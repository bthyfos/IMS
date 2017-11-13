<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Region extends Model
{ 
    public function user()

    {
    	return $this->hasMany(User::class);
    }

}
