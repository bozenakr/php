<?php

class Kibiras1 extends Duobe {

    protected $akmenuKiekis;
    protected $color;

    public function __construct($color = "skyblue") 
    {
        $this-> akmenuKiekis = 0;
        $this-> color = $color;
    }

    public function prideti1Akmeni() : void
    {
        $this-> akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        $this-> akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu() : void
    {
        echo '<h1 style="color: '.$this->color.';">Pririnkta: '.$this-> akmenuKiekis.'</h1>';
    }
}