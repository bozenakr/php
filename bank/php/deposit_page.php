<?php 
$id = (int) $_GET['id'];
foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) {
    if ($user['id'] == $id) {
        break;
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>

<body>
    <ul style="background: skyblue">
        <li>
            <span> <?=$user['id']?> <?=$user['iban']?> <?=$user['name']?> <?=$user['surname']?> <?=$user['ak']?> Balance: <?= $user['balance'] ?> </span>
            <form action="http://localhost/php/bank/php/deposit_money.php?id=<?= $user['id'] ?>" method="post">
                <input type="text" name="balance">
                <button type="submit">Deposit money</button>
            </form>
        </li>

    </ul>
</body>

</html>