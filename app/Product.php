<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;
use App\Handover;


class Product extends Model
{
    public function productType()
    {
    	return $this->belongsTo(ProductType::class,'productTypeId','id');
    }

    public function handover()
    {
    	return $this->hasMany(Handover::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'userId','id');

    }
}
