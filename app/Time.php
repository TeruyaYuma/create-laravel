<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function timeBooks()
    {
       return $this->hasMany('App\Booking');
    }
}
