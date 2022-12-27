<?php
// print_r($_SERVER['REQUEST_METHOD']);
session_start();

// print_r($_SESSION);

//tikrinam dar karta ar yra pasetintas useris
if(!isset($_SESSION['user'])) {
    header('Location: http://localhost/php/bank/php/login.php');
die;
}

if (!file_exists(__DIR__ . '/data')) {
    $arrUsers = [];
} else {
    $arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));
}

usort($arrUsers, fn ($x, $y) => $x['surname'] <=> $y['surname']);

if (isset($_GET['success'])) {
    $success = 'Operacija sėkminga';
}

if (isset($_GET['errorDeleteAccount'])) {
    $errorDeleteAccount = 'Negalima ištrinti, sąskaitoje yra lėšų';
}

if (isset($_GET['successDeleteAccount'])) {
    $successDeleteAccount = 'Sąskaita ištrinta sėkmingai';
}

if (isset($_GET['successAddAccount'])) {
    $successAddAccount = 'Sąskaita sukurta sėkmingai';
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
    <div class="container">
        <div>
            <h2 class="main-title">Sąskaitų sąrašas</h2>
        </div>
        <div class="table">
            <?php foreach ($arrUsers as $user) : ?>
            <div class="table1">
                <div class="content">
                    <div> <?=$user['id']?> </div>
                    <div class="width"> <?=$user['name']?> <?=$user['surname']?> </div>
                    <div> <?=$user['ak']?> </div>
                    <div> <?=$user['iban']?> </div>
                    <div> <?= number_format($user['balance'], 2, '.', '') ?> EUR</div>
                </div>
                <div class="buttons">
                    <a class="btn" href="http://localhost/php/bank/php/deposit_page.php?id=<?= $user['id'] ?>">Pridėti</a>
                    <a class="btn btn-light" href="http://localhost/php/bank/php/withdraw_page.php?id=<?= $user['id'] ?>">Nuskaičiuoti</a>
                    <form action="http://localhost/php/bank/php/delete_account.php?id=<?= $user['id'] ?>" method="post">
                        <button class="btn btn-delete" type="submit">Ištrinti sąskaitą</button>
                    </form>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Sekminga operacija istrinti prideti lesas -->
    <?php if (isset($success)) : ?>
    <div class="container">
        <div class="hide" style="with: 100%">
            <div class="alert alert-success text-center" role="alert">
                <?= $success ?>
            </div>
        </div>
        <?php endif ?>
    </div>

    <!-- Sekminga operacija istrinti saskaita -->
    <?php if (isset($successDeleteAccount)) : ?>
    <div class="container">
        <div class="hide">
            <div class="alert alert-success text-center" role="alert">
                <?= $successDeleteAccount ?>
            </div>
        </div>
        <?php endif ?>
    </div>

    <!-- Error istrinti saskaita -->
    <?php if (isset($errorDeleteAccount)) : ?>
    <div class="container">
        <div class="hide">
            <div class="alert alert-danger text-center" role="alert">
                <?= $errorDeleteAccount ?>
            </div>
        </div>
        <?php endif ?>
    </div>

    <!-- Success sukurti saskaita -->
    <?php if (isset($successAddAccount)) : ?>
    <div class="container">
        <div class="hide">
            <div class="alert alert-success text-center" role="alert">
                <?= $successAddAccount ?>
            </div>
        </div>
        <?php endif ?>
    </div>

    <form class="container" action="http://localhost/php/bank/php/seeder.php" method="post">
        <button type="submit">seeder</button>
    </form>
</body>

</html>