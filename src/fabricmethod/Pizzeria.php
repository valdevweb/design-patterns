<?php

namespace Vmo\PatternStrategy\fabricmethod;


abstract class Pizzeria
{
    protected  $pizza;

    abstract function creerPizza($type): Pizza;

    public function commanderPizza($type)
    {
        $pizza = $this->creerPizza($type);
        $pizza->preparer();
    }
}
