<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    public function stories()
    {
      return $this->hasMany('App\Story');
    }
}
