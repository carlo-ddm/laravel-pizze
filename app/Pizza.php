<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'nome',
        'ingredienti',
        'prezzo',
        'vegetariana'
    ];
}
