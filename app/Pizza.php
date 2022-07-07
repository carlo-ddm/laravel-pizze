<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pizza extends Model
{
    protected $fillable = [
        'nome',
        'ingredienti',
        'prezzo',
        'vegetariana'
    ];
}
