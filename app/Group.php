<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    public function relUsers()
    {
        return $this->hasMany('App\user');
    }
    public function relCourses()
    {
    	return $this->hasMany('App\course');
    }
    
}