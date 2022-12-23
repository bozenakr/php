<?php 
print_r($_SERVER['REQUEST_METHOD']);

if (!file_exists(__DIR__ . '/data')) {
  $arrUsers = [];
} else {
  $arrUSers = unserialize(file_get_contents(__DIR__ . '/data'));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = rand(1000000, 10000000);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    // LT -> 2 sk. kontroliniai -> 5sk. -> banko kodas 35000 -> 11sk. random
    $iban = 'LT' . rand(40,60) . 35000 . rand(10000000000,99999999999);
    $ak = $_POST['ak'];
    $balance = 0;
    $arrUsers[] = ['id' => $id, 'name' => $name, 'surname' => $surname, 'iban' => $iban, 'ak' => $ak, 'balance' => $balance];
    file_put_contents(__DIR__ .'/data', serialize($arrUSers));
    header('Location: http://localhost/php/bank/php/accounts.php');
    die;
}

require __DIR__ . './header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Create new account page</title>
</head>

<body>
    <div>
        Create account
    </div>
    <div>
        <form action="http://localhost/php/bank/php/new_account.php" method="post">
            <div>
                <label>Vardas</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Pavardė</label>
                <input type="text" name="surname" class="" required>
            </div>
            <div>
                <label>Asmens kodas</label>
                <input type="text" name="ak" class="" required>
            </div>

            <!-- read only??iban vel random
            <div>
                <label>Sąskaitos numeris (IBAN)</label>
                <input readonly name="iban" class="" value=$iban???error
            </div> -->

            <button type="submit" class="">Sukurti</button>
        </form>
    </div>
</body>

</html>