<?php

namespace Vmo\PatternStrategy\strategy;

class Coincoin implements ComportementCancan
{
    public function cancaner(): void
    {
        echo "je fais coin coin";
    }
}
