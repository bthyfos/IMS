<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UserRoles extends Model
{
    public function users()
    {
      return $this->hasOne(User::class);
    }
}
