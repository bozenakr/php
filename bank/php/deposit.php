<?php

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];


// foreach ($arrUsers as $index => $user) {
//     if ($user['id'] ==  $id) {
//         $arrUsers[$index]['balance'] += (int) $_POST['balance']; //suma gaunam is langelio post metodu
//         file_put_contents(__DIR__ . '/data', serialize($arrUsers));
//         header('Location: http://localhost/php/bank/php/accounts.php?success');
//         break;
//     }
// }

foreach ($arrUsers as $index => $user) {
    if ($user['id'] ==  $id) {
      if (((float) $_POST['balance']) <= 0 || !is_numeric($_POST['balance'])) {
        header ('Location: http://localhost/php/bank/php/deposit_page.php?id=' . $user['id'] . '&error');//jei error
      } else {
            $arrUsers[$index]['balance'] = $arrUsers[$index]['balance'] + (float) $_POST['balance'];
            file_put_contents(__DIR__ . '/data', serialize($arrUsers));
            header('Location: http://localhost/php/bank/php/accounts.php?success'); //jei ok
            break;
        }
    }
}