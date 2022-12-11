<?php

use Vmo\PatternStrategy\composite2\File;
use Vmo\PatternStrategy\composite2\Directory;

require_once 'vendor/autoload.php';


$fileOne = new File('file one', 100);
$fileTwo = new File('file two', 200);
$directory = new Directory('dir one');

$directory->add($fileOne);
$directory->add($fileTwo);

echo $directory->getName(); // outputs "dir one"
echo $directory->getSize(); // outputs 300

$children = $directory->getChildren();
echo "<pre>";
print_r($children);
echo '</pre>';
