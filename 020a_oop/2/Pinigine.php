<?php
// 2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. 
//Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
// Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function __construct() 
    {
        $this-> popieriniaiPinigai = 0;
        $this-> metaliniaiPinigai = 0;
    }

    public function ideti($kiekis) : void
    {
        if ($kiekis <= 2) {
            $this-> metaliniaiPinigai += $kiekis;
        } else {
            $this-> popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        echo '<h2>Popieriniai: ' . $this-> popieriniaiPinigai . '</h2>';
        echo '<h2>Metaliniai: ' . $this-> metaliniaiPinigai . '</h2>';
        echo '<h2>Suma: ' . $this-> metaliniaiPinigai + $this-> metaliniaiPinigai . '</h2>';
        echo '===============';
    }
}