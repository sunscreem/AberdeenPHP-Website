<?php

use Illuminate\Database\Seeder;
use App\PizzaTopping;

class PizzaToppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PizzaTopping::create(['topping'=>'mushrooms']);
        PizzaTopping::create(['topping'=>'ground beef']);
        PizzaTopping::create(['topping'=>'mushrooms']);
        PizzaTopping::create(['topping'=>'onions']);
        PizzaTopping::create(['topping'=>'pepperoni']);
        PizzaTopping::create(['topping'=>'pineapple']);
        PizzaTopping::create(['topping'=>'garlic']);
        PizzaTopping::create(['topping'=>'olives']);
        PizzaTopping::create(['topping'=>'peppers']);
        PizzaTopping::create(['topping'=>'carrots']);
        PizzaTopping::create(['topping'=>'tomatoes']);
        PizzaTopping::create(['topping'=>'spinach']);
        PizzaTopping::create(['topping'=>'anchovies']);
        PizzaTopping::create(['topping'=>'chicken']);
        PizzaTopping::create(['topping'=>'bacon']);
        PizzaTopping::create(['topping'=>'ham']);
        PizzaTopping::create(['topping'=>'sausage']);
    }
}
