<?php

namespace Vmo\PatternStrategy\strategy;

class NePasVoler implements ComportementVol
{
    public function voler(): void
    {
        echo "je ne vole pas";
    }
}
