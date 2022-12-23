<?php
print_r($_SERVER['REQUEST_METHOD']);

$arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));


usort($arrUsers, fn ($x, $y) => $x['surname'] <=> $y['surname']);

if (isset($_GET['success'])) {
    $success = 'Operacija sekminga';
}

if (isset($_GET['errorDeleteAccount'])) {
    $errorDeleteAccount = 'Negalima istrinti, saskaitoje yra lesu';
}

if (isset($_GET['successDeleteAccount'])) {
    $successDeleteAccount = 'Saskaita istrinta sekmingai';
}

require __DIR__ . './header.php';

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

    <!-- Sekminga operacija istrinti prideti lesas -->
    <?php if (isset($success)) : ?>
    <div class="hide">
        <span class="alert alert-success" role="alert">
            <?= $success ?>
        </span>
    </div>
    <?php endif ?>

    <!-- Sekminga operacija istrinti saskaita -->
    <?php if (isset($successDeleteAccount)) : ?>
    <div class="hide">
        <span class="alert alert-success" role="alert">
            <?= $successDeleteAccount ?>
        </span>
    </div>
    <?php endif ?>

    <!-- Error istrinti saskaita -->
    <?php if (isset($errorDeleteAccount)) : ?>
    <div class="hide">
        <span class="alert alert-danger" role="alert">
            <?= $errorDeleteAccount ?>
        </span>
    </div>
    <?php endif ?>

    <form action="http://localhost/php/bank/php/seeder.php" method="post">
        <button type="submit">seeder</button>
    </form>
</body>

</html>