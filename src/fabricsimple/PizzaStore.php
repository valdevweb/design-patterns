<?php

namespace Vmo\PatternStrategy\fabricsimple;

use Vmo\PatternStrategy\fabricsimple\SimpleFabricPizza;

class PizzaStore
{


    private SimpleFabricPizza $fabrique;

    public function __construct(SimpleFabricPizza $fabrique)
    {
        $this->fabrique = $fabrique;
    }
    public function commanderPizza(string $type)
    {
        $pizza = $this->fabrique->creerPizza($type);
        $pizza->prepare();
        return $pizza;
    }
}
