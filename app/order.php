<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\user','userid');
    }
    public function status()
    {
        return $this->belongsTo('App\status', "statusid");
    }
    public function orderdetail()
    {
        return $this->hasMany('App\ordersdetail');
    }
}
