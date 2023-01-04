<?php
// 1.	Sukurti klasę Kibiras1. Sukurti protected(private) savybę akmenuKiekis. Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą. 

require __DIR__ . '/Duobe.php';
require __DIR__ . '/Kibiras1.php';

$k1 = new Kibiras1('crimson');
$k2 = new Kibiras1;
$k3 = new Kibiras1;

$k2->prideti1Akmeni();
$k2->prideti1Akmeni();
$k2->prideti1Akmeni();

$k3->pridetiDaugAkmenu(10);
$k3->prideti1Akmeni();

$k3->ispilti();

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();