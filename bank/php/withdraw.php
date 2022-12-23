<?php

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];

foreach ($arrUsers as $index => $user) {
    if ($user['id'] ==  $id) {
      $newBalance = $_POST['naujaSuma'];
        if (str_contains(($newBalance), ',')) {
          $newBalance = str_replace(',', '.', ($newBalance));
    }
    if ($arrUsers[$index]['balance'] >= (float) $newBalance && is_numeric($newBalance) && $newBalance > 0) {
      $arrUsers[$index]['balance'] = $arrUsers[$index]['balance'] - (float) $newBalance;
        header('Location: http://localhost/php/bank/php/accounts.php?success'); //jei ok
        file_put_contents(__DIR__ . '/data', serialize($arrUsers));
        break;
      } else {
        header ('Location: http://localhost/php/bank/php/withdraw_page.php?id=' . $user['id'] . '&error');//jei error
        die;
      }
    }
}