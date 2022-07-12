<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Pizza extends Model
{
    protected $fillable = [
        'nome',
        'slug',
        'ingredienti',
        'prezzo',
        'vegetariana'
    ];

    public function ingredients(){
        return $this->belongsToMany('App\Ingredient');
    }

    public static function generateSlug($nome){
        $slug = Str::slug($nome, '-');
        $slug_base = $slug;
        $pizza_esistente = Pizza::where('slug', $slug)->first();
        $counter = 1;

        while($pizza_esistente){
            $slug = $slug_base . '-' . $counter;
            $counter++;
            $pizza_esistente = Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}
