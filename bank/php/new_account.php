<?php 
if (!file_exists(__DIR__ . '/data')) {
  $arr = [];
} else {
  $arr = unserialize(file_get_contents(__DIR__ . '/data'));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = rand(1000000, 10000000);
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $iban = $_POST['iban'];
    $ak = $_POST['ak'];
    $balance = 0;
    $arr[] = ['id' => $id, 'name' => $name, 'surname' => $surname, 'iban' => $iban, 'ak' => $ak, 'balance' => $balance];

print_r($_POST);

    file_put_contents(__DIR__ .'/data', serialize($arr));
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
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <div>
                <label>Surname</label>
                <input type="text" name="surname" class="" placeholder="Surname" required>
            </div>
            <div>
                <label>Iban</label>
                <input type="text" name="iban" class="" placeholder="Iban" required>
            </div>
            <div>
                <label>Asmens kodas</label>
                <input type="text" name="ak" class="" placeholder="Asmens kodas" required>
            </div>
            <button type="submit" class="">Create</button>
        </form>
    </div>
</body>

</html>