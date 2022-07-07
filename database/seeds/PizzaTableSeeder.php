<?php

use Illuminate\Database\Seeder;

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
        dd($pizzas);
        foreach($pizzas as $pizza){
            $new_pizza = new Pizza();
            $new_pizza->nome = $nome['nome'];
            $new_pizza->ingredienti = $ingredienti['ingredienti'];
            $new_pizza->prezzo = $prezzo['prezzo'];
            $new_pizza->vegetariana = $vegetariana['vegetariana'];
        }
    }
}
