<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductType extends Model
{
    return $this->hasMany(Produc::class);
}
