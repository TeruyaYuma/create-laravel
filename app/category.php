<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function infoCategory()
    {
        return $this->hasMany('App\Info');
    }
}
