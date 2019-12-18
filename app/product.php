<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function Producttype()
    {
        return $this->belongsTo('App\product_type','producttypeid');
    }
    public function orderdetail()
    {
        return $this->hasMany('App\ordersdetail','productid');
    }
    protected $table = 'products';
    protected $fillable = ['productname','producttypeid','height','width','price', 'quantity','image'];
}
