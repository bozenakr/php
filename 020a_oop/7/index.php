<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$krepsys = new Krepsys;

while($krepsys->grybauti(new Grybas)) {}

echo '<pre>';
print_r($krepsys);