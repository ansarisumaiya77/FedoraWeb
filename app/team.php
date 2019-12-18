<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    public function teamdetail()
    {
        return $this->hasMany('App\teamdetail');
    }
    public function assignproject()
    {
        return $this->hasMany('App\assignproject', 'teamid');
    }

}
