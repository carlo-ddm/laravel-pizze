<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ingredient extends Model
{
    public function pizzas(){
        return $this->belongsToMany('App\Pizza');
    }
}
