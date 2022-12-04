<?php

use Vmo\PatternStrategy\strategy\Voler;
use Vmo\PatternStrategy\strategy\Cancan;
use Vmo\PatternStrategy\strategy\Colvert;

require_once 'vendor/autoload.php';




$voler = new Voler();
$cancaner = new Cancan();
$colvert = new Colvert();

$colvert->setComportementCancan($cancaner);
$colvert->setComportementVol($voler);
$colvert->effectuerCancan();
$colvert->effectuerVol();
