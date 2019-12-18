<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignproject extends Model
{
    public function team()
    {
        return $this->belongsTo('App\team', 'teamid');
    }
    public function booking()
    {
        return $this->belongsTo('App\booking', 'bookingid');
    }

}
