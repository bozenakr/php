<?php
// 2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. 
//Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
// Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.

class Pinigine2 {

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $metaliniaiSuma;
    private $popieriniaiSuma;

    public function __construct() 
    {
        $this-> popieriniaiPinigai = 0;
        $this-> metaliniaiPinigai = 0;
    }

    public function ideti($kiekis) : void
    {
        if ($kiekis <= 2) {
            $this-> metaliniaiPinigai += $kiekis;
            $this-> metaliniaiSuma++;
        } else {
            $this-> popieriniaiPinigai += $kiekis;
            $this-> popieriniaiSuma++;
        }
    }

    public function skaiciuoti()
    {
        // echo '<h2>Popieriniai: ' . $this-> popieriniaiPinigai . '</h2>';
        // echo '<h2>Metaliniai: ' . $this-> metaliniaiPinigai . '</h2>';
        echo '===============';
        echo '<h2>Suma: ' . $this-> metaliniaiPinigai + $this-> metaliniaiPinigai . '</h2>';
    }

    public function monetos() {
        if ($metaliniaiSuma = 0) {
            return 'tuscia';
        } else {
            return $this->metaliniaiSuma;
        }
    }

    public function banknotai() {
        return $this->popieriniaiSuma;
    }
}