<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordersdetail extends Model
{
    public function product()
    {
        return $this->belongsTo('App\product', 'productid');
    }
    public function order()
    {
        return $this->belongsTo('App\order');
    }
}
