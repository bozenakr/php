<?php
// 7.	Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški daugiau nei DYDIS).

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = (bool) rand(0,1);
        $this->sukirmijes = (bool) rand(0,1);
        $this->svoris = rand(5,45);
    }

    //i get propsas patampa stringas valgomas, stringas valgomas idedamas i $this->$prop (tai nera savybe prop, cia savybe, kuri yra kintamajame prop)
    public function __get($prop)
    {
        return $this->$prop;
    }
}