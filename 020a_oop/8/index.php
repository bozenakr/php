<?php
// 2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
// Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. 
//Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
// Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje. 

// 8.	Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - popierinių pinigų skaičiavimui.

require __DIR__ . '/Pinigine2.php';

$p1 = new Pinigine2;
$p2 = new Pinigine2;
$p3 = new Pinigine2;


$p1->ideti(5);
$p1->ideti(10);
$p1->skaiciuoti();
echo 'Monetu yra: ' . $p1->monetos();
echo '<br>';
echo 'Banknotu yra: ' . $p1->banknotai();

echo '<br>';

$p2->ideti(0.5);
$p2->ideti(1.9);
$p2->skaiciuoti();
echo 'Monetu yra: ' . $p2->monetos();
echo '<br>';
echo 'Banknotu yra: ' . $p2->banknotai();

echo '<br>';

$p3->ideti(3);
$p3->ideti(1);
$p3->skaiciuoti();
echo 'Monetu yra: ' . $p3->monetos();
echo '<br>';
echo 'Banknotu yra: ' . $p3->banknotai();

echo '<br>';