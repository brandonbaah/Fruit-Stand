<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function fruits()
    {
      return $this->hasMany('App\Fruit');
    }
}
