<?php

class Stikline 
{
    private $turis;
    private $kiekis;
    
    function __construct(int $turis) 
    {
        $this-> turis = $turis;
        $this->kiekis = 0;
    }

    // public function ipilti(int $kiekis) : void
    // {
    //     if ($this->turis < $kiekis) {
    //         echo 'tūris mazesnis nei pilamas kiekis - kiekis netelpa ir būna lygus tūriui';
    //         echo '<br>';
    //         echo '<br>';
    //         $kiekis = $this->turis;
    //     } else {
    //         $kiekis = $this->kiekis;
    //     }
    // }

    //be if
    public function ipilti($kiekis) : self
    {
        $this->kiekis = min($this->turis, $this-> kiekis + $kiekis);
        return $this;
    }



    public function ispilti() : int
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }

}