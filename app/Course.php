<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function relRooms()
    {
    	return $this->hasOne('App\course');
    }
}
