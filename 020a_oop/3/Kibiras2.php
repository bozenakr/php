<?php
// 3.	(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.

class Kibiras2 {

    protected $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public static function akmenuKiekisVisuoseKibiruose() : void
    {
        echo '<h1>Pririnkta visuose kibiruose: '. self:: $akmenuKiekisVisuoseKibiruose.'</h1>';
    }

    //konstruktorius tai kiekvieno kibiro dalykas
    public function __construct() 
    {
        $this-> akmenuKiekis = 0;
    }

    public function prideti1Akmeni() : void
    {
        //prirista prie klases
        self:: $akmenuKiekisVisuoseKibiruose++;

        //prirista prie vieno kibiro
        $this-> akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) : void
    {
        self:: $akmenuKiekisVisuoseKibiruose += $kiekis;
        $this-> akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu() : void
    {
        echo '<h1>Pririnkta: '.$this-> akmenuKiekis.'</h1>';
    }
}