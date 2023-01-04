<?php

require __DIR__ . '/Kibiras3.php';

class KibirasNePo1 extends Kibiras3 {

    protected $akmenuKiekis;

    public function prideti1Akmeni() : void
    {
        $this-> akmenuKiekis += rand(2,5);
    }
}