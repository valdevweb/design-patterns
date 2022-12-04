<?php

namespace Vmo\PatternStrategy\fabricmethod;

use Vmo\PatternStrategy\fabricmethod\Pizza;
use Vmo\PatternStrategy\fabricmethod\Pizzeria;
use Vmo\PatternStrategy\fabricmethod\PizzaVgReims;
use Vmo\PatternStrategy\fabricmethod\PizzaFromageReims;


class PizzeriaReims extends Pizzeria
{

    public function creerPizza($type): Pizza
    {
        if ($type == "fromage") {
            $pizza = new PizzaFromageReims();
        } elseif ($type == "vg") {
            $pizza = new PizzaVgReims();
        }
        return $pizza;
    }
}
