<?php 

print_r($_SERVER['REQUEST_METHOD']);

$id = (int) $_GET['id'];
foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) {
    if ($user['id'] == $id) {
        break;
    }
}

//error rodomas deposit_page iskart
if (isset($_GET['error'])) {
    $error = 'Klaida - prašome įvesti teisingą sumą.<br>Galimos klaidos:<br>Skaicius minusinis,<br>Bandote ivest 0,<br>Bandote ivest ne skaiciu,<br>Kablelis!!';
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
    <title>Deposit page</title>
</head>

<body>
    <ul style="background: skyblue">
        <li>
            <span> <?=$user['id']?> <?=$user['iban']?> <?=$user['name']?> <?=$user['surname']?> <?=$user['ak']?> Sąskaitos likutis: <?= $user['balance'] ?> </span>
            <form action="http://localhost/php/bank/php/deposit.php?id=<?= $user['id'] ?>" method="post">
                <input type="text" name="naujaSuma">
                <button type="submit">Deposit</button>
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