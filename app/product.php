<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function Producttype()
    {
        return $this->belongsTo('App\product_type');
    }

    protected $table = 'products';
    protected $fillable = ['productname','producttypeid','height','width','price', 'quantity','image'];
}
