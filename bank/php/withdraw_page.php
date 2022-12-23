<?php

print_r($_SERVER['REQUEST_METHOD']);

$id = (int) $_GET['id'];
foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) {
    if ($user['id'] == $id) {
        break;
    }
}

if (isset($_GET['error'])) {
    $error = 'Klaida:<br>Nepakankamas sąskaitos likutis<br>arba<br>ivedamas minusinis skaicius arba neskaicius';
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
    <title>Withdraw page</title>
</head>

<body>
    <ul style="background: skyblue">
        <li>
            <span> <?=$user['id']?> <?=$user['iban']?> <?=$user['name']?> <?=$user['surname']?> <?=$user['ak']?> Sąskaitos likutis: <?= $user['balance'] ?> </span>
            <form action="http://localhost/php/bank/php/withdraw.php?id=<?= $user['id'] ?>" method="post">
                <input type="text" name="naujaSuma">
                <button type="submit">Withdraw</button>
            </form>
        </li>
    </ul>
    <?php if (isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
    <?php endif ?>
</body>

</html>