<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Produvt;

class Handover extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
