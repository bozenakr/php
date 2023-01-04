<?php
// 2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. 
//Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
// Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje. 
// Privati savybe reikia __get

require __DIR__ . '/Pinigine.php';

$p1 = new Pinigine;
$p2 = new Pinigine;
$p3 = new Pinigine;


$p1->ideti(5);
$p1->ideti(10);
$p1->skaiciuoti();

$p2->ideti(0.5);
$p2->ideti(1.9);
$p2->skaiciuoti();

$p3->ideti(3);
$p3->ideti(1);
$p3->skaiciuoti();