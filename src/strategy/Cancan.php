<?php

namespace Vmo\PatternStrategy\strategy;


class Cancan implements ComportementCancan
{
    public function cancaner(): void
    {
        echo "je fais can can";
    }
}
