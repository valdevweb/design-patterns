<?php

use Vmo\PatternStrategy\fabricsimple\PizzaStore;
use Vmo\PatternStrategy\fabricsimple\SimpleFabricPizza;


require_once 'vendor/autoload.php';



$pizzaStore = new PizzaStore(new SimpleFabricPizza);
$pizzaStore->commanderPizza("fromage");
