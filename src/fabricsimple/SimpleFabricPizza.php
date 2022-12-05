<?php

namespace Vmo\PatternStrategy\fabricsimple;


use Vmo\PatternStrategy\fabricsimple\PizzaFromage;
use Vmo\PatternStrategy\fabricsimple\PizzaVegetarienne;



class SimpleFabricPizza
{
    protected $pizza = null;
    public function creerPizza(string $type)
    {
        if ($type == "fromage") {
            $this->pizza = new PizzaFromage();
        } elseif ($type == "vegetarienne") {
            $this->pizza = new PizzaVegetarienne();
        }
        return $this->pizza;
    }
}
