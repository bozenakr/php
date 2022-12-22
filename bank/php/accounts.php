<?php

require __DIR__ . './header.php';
$arr = unserialize(file_get_contents(__DIR__ . '/data'));
usort($arr, fn ($x, $y) => $x['name'] <=> $y['surname']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home page</title>
</head>

<body>
    <ul style="background: skyblue">
        <?php foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) : ?>
        <li>
            <span> <?=$user['id']?> <?=$user['iban']?> <?=$user['name']?> <?=$user['surname']?> <?=$user['ak']?> Balance: <?= $user['balance'] ?> </span>
            <div>
                <a href="http://localhost/php/bank/php/deposit_page.php?id=<?= $user['id'] ?>">DEPOSIT</a>
                <!-- br nenaudot!!!! -->
                <br>
                <a href="http://localhost/php/bank/php/withdraw_page.php?id=<?= $user['id'] ?>">WITHDRAW</a>
            </div>
            <form action="http://localhost/php/bank/php/delete_account.php?id=<?= $user['id'] ?>" method="post">
                <button type="submit">Delete account</button>
            </form>
        </li>
        <?php endforeach ?>
    </ul>
    <form action="http://localhost/php/bank/php/seeder.php" method="post">
        <button type="submit">seeder</button>
    </form>
</body>

</html>