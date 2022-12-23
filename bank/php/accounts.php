<?php
print_r($_SERVER['REQUEST_METHOD']);

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));

require __DIR__ . './header.php';

if (isset($_GET['success'])) {
    $success = 'Operacija sekminga';
}

if (isset($_GET['errorAccount'])) {
    $errorAccount = 'Nauja saskaita prideta';
}

if (isset($_GET['successAccount'])) {
    $successAccount = 'Negalima istrinti, saskaitoje yra lesu.';
}

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
        <?php foreach ($arrUsers as $user) : ?>
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
    <?php if (isset($success)) : ?>
    <div class="hide">
        <span class="alert alert-success" role="alert">
            <?= $success ?>
        </span>
    </div>
    <?php endif ?>
    <?php if (isset($successAccount)) : ?>
    <div class="hide">
        <span class="alert alert-success" role="alert">
            <?= $successAccount ?>
        </span>
    </div>
    <?php endif ?>
    <?php if (isset($errorAccount)) : ?>
    <div class="hide">
        <span class="alert alert-error" role="alert">
            <?= $errorAccount ?>
        </span>
    </div>
    <?php endif ?>
    <form action="http://localhost/php/bank/php/seeder.php" method="post">
        <button type="submit">seeder</button>
    </form>
</body>

</html>