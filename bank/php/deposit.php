<?php

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];

foreach ($arrUsers as $index => $user) {
  if ($user['id'] ==  $id) {
    //tai ka gaunu is POST imetu i nauja kintamaji $newBalance
      $newBalance = $_POST['naujaSuma'];
    if (str_contains(($newBalance), ',')) {
      $newBalance = str_replace(',', '.', ($newBalance));
    }
    if ((float) $newBalance > 0 && is_numeric($newBalance)) {
        (float) $arrUsers[$index]['balance'] = $arrUsers[$index]['balance'] + (float) $newBalance;
        file_put_contents(__DIR__ . '/data', serialize($arrUsers));
        header('Location: http://localhost/php/bank/php/accounts.php?success'); //jei ok
        break;
    } else {
      header ('Location: http://localhost/php/bank/php/deposit_page.php?id=' . $user['id'] . '&error');//jei error
    }
  }
}