<?php

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];


foreach ($arrUsers as $index => $user) {
    if ($user['id'] ==  $id) {
      if ($arrUsers[$index]['balance'] < (float) $_POST['balance']) {
        header ('Location: http://localhost/php/bank/php/withdraw_page.php?id=' . $user['id'] . '&error');//jei error
      } else {
            $arrUsers[$index]['balance'] = $arrUsers[$index]['balance'] - (float) $_POST['balance'];
            file_put_contents(__DIR__ . '/data', serialize($arrUsers));
            header('Location: http://localhost/php/bank/php/accounts.php?success'); //jei ok
            break;
        }
    }
}