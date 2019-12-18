<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function booking()
    {
        return $this->hasMany('App\booking');
    }
    public function order()
    {
        return $this->hasMany('App\order','statusid');
    }

}
