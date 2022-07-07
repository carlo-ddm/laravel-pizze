<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = config('pizze');


        foreach($pizzas as $pizza){
            $new_pizza = new Pizza();
            $new_pizza->nome = $pizza['nome'];
            $new_pizza->ingredienti = $pizza['ingredienti'];
            $new_pizza->prezzo = $pizza['prezzo'];
            $new_pizza->vegetariana = $pizza['vegetariana'];
            $new_pizza->save();
        }
    }
}
