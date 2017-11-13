<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;
use App\Handover;


class Product extends Model
{
    public function productType()
    {
    	return $this->belongsTo(ProductType::class);
    }

    public function handover()
    {
    	return $this->hasMany(Handover::class);
    }
}
