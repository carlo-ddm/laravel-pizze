<?php

use Illuminate\Database\Seeder;
use App\Ingredient;
use App\Pizza;

class IngredientsPizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {

            $pizza = Pizza::inRandomOrder()->first();

            $ingredient_id = Ingredient::inRandomOrder()->first()->id;

            $pizza->ingredients()->attach($ingredient_id);
        }
    }
}
