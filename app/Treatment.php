<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function trearmentBooks()
    {
       return $this->hasMany('App\Booking');
    }
}
