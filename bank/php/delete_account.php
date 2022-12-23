<?php

//pasiimam visus failus
$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];
//viskas kas ateina is formos yra stringas todel dedam int - suparsinam i skaiciu


//einam per visus userius
//randam kuri id reikia istrint
//unsetinam ta index kuri radom
//issaugojam put contents ir header location i pagrindini psl

foreach ($arrUsers as $index => $user) {
    if ($user['id'] ==  $id) {
        if($user['balance'] == 0) {
            unset($arrUsers[$index]);
            file_put_contents(__DIR__ . '/data', serialize($arrUsers));
            header('Location: http://localhost/php/bank/php/accounts.php?successDeleteAccount');
            break;
        } else {
        } header('Location: http://localhost/php/bank/php/accounts.php?errorDeleteAccount');
            die;
    }
}


// header('Location: http://localhost/php/bank/php/accounts.php');