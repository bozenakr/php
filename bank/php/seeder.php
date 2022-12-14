<?php

$data = [
    ['id' => rand(1000000, 10000000), 'name' => 'Zita', 'surname' => 'Zitienė', 'iban' => 'LT563500010014440191',  'ak' => 48709240003, 'balance' => 0],
    ['id' => rand(1000000, 10000000), 'name' => 'Jonas', 'surname' => 'Jonaitis', 'iban' => 'LT601010012345678901', 'ak' => 36309240001, 'balance' => 10000],
    ['id' => rand(1000000, 10000000), 'name' => 'Petras', 'surname' => 'Petraitis', 'iban' => 'LT012345678950124567',  'ak' => 33229240005, 'balance' => 10]
];


$users = [
    ['name' => 'Bebras', 'psw' => md5('123'), 'color' => 'crimson'],
    ['name' => 'Briedis', 'psw' => md5('123'), 'color' => 'skyblue'],
    ['name' => 'Parsas', 'psw' => md5('123'), 'color' => 'pink']
];

file_put_contents(__DIR__ . '/data', serialize($data));
file_put_contents(__DIR__ . '/users', serialize($users));


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Location: http://localhost/php/bank/php/accounts.php');
    die;
    }