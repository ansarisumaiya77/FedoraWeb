<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamdetail extends Model
{
    public function team()
    {
        return $this->belongsTo('App\team', 'teamid');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'employeeid');
    }

}
