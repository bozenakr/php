<?php

Class Krepsys {
    const dydis = 500;
    private $kiekGrybuPririnkta = 0;

    public function grybauti(Grybas $grybas) : bool
    {
        if($grybas->valgomas && !$grybas->sukirmijes) {
            $this->kiekGrybuPririnkta += $grybas->svoris;
        }
        return self::dydis >= $this->kiekGrybuPririnkta;
    }
}