<?php
// 3.	(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.

require __DIR__ . '/Kibiras2.php';


$k1 = new Kibiras2;
$k2 = new Kibiras2;
$k3 = new Kibiras2;


$k1->prideti1Akmeni();

$k2->prideti1Akmeni();
$k2->prideti1Akmeni();
$k2->prideti1Akmeni();

$k3->pridetiDaugAkmenu(10);
$k3->prideti1Akmeni();

$k1->kiekPririnktaAkmenu();
$k2->kiekPririnktaAkmenu();
$k3->kiekPririnktaAkmenu();

Kibiras2:: akmenuKiekisVisuoseKibiruose();