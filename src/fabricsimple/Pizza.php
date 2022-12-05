<?php

namespace Vmo\PatternStrategy\fabricsimple;

use Vmo\PatternStrategy\fabricsimple\SimpleFabricPizza;

abstract class Pizza
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        echo "prepare une pizza " . $this->name;
    }
}
