<?php

namespace Vmo\PatternStrategy\strategy;

use Vmo\PatternStrategy\strategy\ComportementVol;
use Vmo\PatternStrategy\strategy\ComportementCancan;


abstract class Canard
{
    public  ComportementVol  $comportementVol;
    public   ComportementCancan  $comportementCancan;

    //  ebstraite car c'est la classe concrete qui fera l'affichage
    abstract public function afficher(): void;

    public function effectuerVol(): void
    {
        $this->comportementVol->voler();
    }
    public function effectuerCancan(): void
    {
        $this->comportementCancan->cancaner();
    }
    public function setComportementVol(ComportementVol $comportementVol)
    {
        $this->comportementVol = $comportementVol;
    }
    public function setComportementCancan(ComportementCancan $comportementCancan)
    {
        $this->comportementCancan = $comportementCancan;
    }
    public function nager(): void
    {
        echo "Tous les canards flottent, même les leurres!";
    }
}
