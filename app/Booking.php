<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function time()
    {
       return $this->belongsTo('App\Time');
    }

    public function treatment()
    {
        return $this->belongsTo('App\Treatment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
