<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public function user()
    {
        return $this->belongsTo('App\user');
    }
    public function project()
    {
        return $this->belongsTo('App\project',"projectid");
    }
    public function status()
    {
        return $this->belongsTo('App\status',"statusid");
    }
    public function assignproject()
    {
        return $this->hasOne('App\assignproject', 'bookingid');
    }
    
}
