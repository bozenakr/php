<?php

//pasiimam visus failus
$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];
//viskas kas ateina is formos yra stringas todel dedam int - suparsinam i skaiciu


//einam per visus userius
//randam kuri id reikia istrint
//unsetinam ta index kuri radom
//issaugojam put contents ir header location i pagrindini psl

foreach ($users as $index => $user) {
    if ($user['id'] ==  $id) {
        unset($users[$index]);
        break;
    }
}

file_put_contents(__DIR__ . '/data', serialize($users));

header('Location: http://localhost/php/bank/php/');