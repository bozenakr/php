<?php
// 6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. 
// Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 
// Parašyti metodą ispilti(), kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. 
// Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę.

require __DIR__ . '/Stikline.php';

$s100 = new Stikline(100);
$s150 = new Stikline(150);
$s200 = new Stikline(200);


$s100
->ipilti($s150
->ipilti($s200
->ipilti(1000)
->ispilti())
->ispilti());

echo '<pre>';
print_r($s100);
echo '<br>';
print_r($s150);
echo '<br>';
print_r($s200);