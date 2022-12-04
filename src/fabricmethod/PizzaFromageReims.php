<?php

namespace Vmo\PatternStrategy\fabricmethod;

use Vmo\PatternStrategy\fabricmethod\Pizza;




class PizzaFromageReims extends Pizza
{
    public function preparer()
    {
        echo "preparation de la pizza fromage reims";
    }
}
