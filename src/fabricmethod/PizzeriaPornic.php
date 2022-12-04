<?php

namespace Vmo\PatternStrategy\fabricmethod;

use Vmo\PatternStrategy\fabricmethod\Pizzeria;
use Vmo\PatternStrategy\fabricmethod\PizzaVgPornic;
use Vmo\PatternStrategy\fabricmethod\PizzaFromagePornic;

class PizzeriaPornic extends Pizzeria
{

    public function creerPizza($type): Pizza
    {
        if ($type == "fromage") {
            $pizza = new PizzaFromagePornic();
        } elseif ($type == "vg") {
            $pizza = new PizzaVgPornic();
        }
        return $pizza;
    }
}
