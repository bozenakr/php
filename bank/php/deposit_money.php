<?php


$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];


foreach ($users as $index => $user) {
    if ($user['id'] ==  $id) {
        $users[$index]['balance'] += (int) $_POST['balance']; //suma gaunam is langelio post metodu
        break;
    }
}

file_put_contents(__DIR__ . '/data', serialize($users));

header('Location: http://localhost/php/bank/php/');