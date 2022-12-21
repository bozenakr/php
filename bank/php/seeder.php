<?php

$data = [
    ['id' => rand(1000000, 10000000), 'name' => 'Jonas', 'surname' => 'Jonaitis', 'iban' => 'LT601010012345678901', 'ak' => 36309240001, 'balance' => 10000],
    ['id' => rand(1000000, 10000000), 'name' => 'Petras', 'surname' => 'Petraitis', 'iban' => 'LT012345678901234567',  'ak' => 33229240005, 'balance' => 10],
    ['id' => rand(1000000, 10000000), 'name' => 'Ona', 'surname' => 'Onaitė', 'iban' => 'LT563500010014440191',  'ak' => 487092404003, 'balance' => 999]
];

file_put_contents(__DIR__ . '/data', serialize($data));