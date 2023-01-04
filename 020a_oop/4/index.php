<?php
// 4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3.
// Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5.
// Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą.

require __DIR__ . '/KibirasNePo1.php';

$k1 = new KibirasNePo1;
$k2 = new KibirasNePo1;
$k3 = new KibirasNePo1;

$k1->prideti1Akmeni();

$k2->prideti1Akmeni();
// $k2->prideti1Akmeni();
// $k2->prideti1Akmeni();

$k3->prideti1Akmeni();

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();