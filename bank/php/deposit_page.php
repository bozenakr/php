<?php 

// print_r($_SERVER['REQUEST_METHOD']);

$id = (int) $_GET['id'];
foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) {
    if ($user['id'] == $id) {
        break;
    }
}

//error rodomas deposit_page iskart
if (isset($_GET['error'])) {
    $error = 'Klaida:<br>Prašome įvesti teisingą sumą.';
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
    <div class="container">
        <div>
            <h2 class="main-title">Lėšų pridėjimas</h2>
        </div>
        <div class="div-line">
            <div class="text">
                <div> <?=$user['name']?> <?=$user['surname']?> <p> Sąskaitos likutis: <?= number_format($user['balance'], 2, '.', '') ?> EUR</p>
                </div>
            </div>
            <div class="form">
                <form action="http://localhost/php/bank/php/deposit.php?id=<?= $user['id'] ?>" method="post">
                    <input class="input" type="text" name="naujaSuma">
                    <button class="btn btn-margin" type="submit">Pridėti</button>
            </div>
            </form>
        </div>
        <?php if (isset($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php endif ?>
    </div>
</body>

</html>