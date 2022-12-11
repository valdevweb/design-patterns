<?php

class Main
{
    protected static string $name = __CLASS__;

    public function getName(): string
    {
        return self::$name;
    }
}

class Secondary extends Main
{
    protected static string $name = __CLASS__;
    public function printName()
    {
        return self::$name;
    }
}


$secondary = new Secondary();
echo $secondary->getName();
echo $secondary->printName();
