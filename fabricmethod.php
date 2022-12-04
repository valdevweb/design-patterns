<?php
require_once 'vendor/autoload.php';

use Vmo\PatternStrategy\fabricmethod\PizzeriaReims;

$pizzeriaReims = new PizzeriaReims();
$pizza = $pizzeriaReims->commanderPizza("fromage");
echo "<pre>";
print_r($pizza);
echo '</pre>';
