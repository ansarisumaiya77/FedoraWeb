<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    public function product()
    {
        return $this->hasMany('App\product');
    }
}
