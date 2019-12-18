<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function Projecttype()
    {
        return $this->belongsTo('App\projecttype');
    }
    public function bookings()
    {
        return $this->hasMany('App\booking');
    }
    public function orderdetail()
    {
        return $this->hasMany('App\ordersdetail');
    }
}
