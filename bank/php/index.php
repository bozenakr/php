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
        <?php foreach (unserialize(file_get_contents(__DIR__ . '/data')) as $user) : ?>
        <li>
            <span> <?=$user['id']?> <?=$user['iban']?> <?=$user['name']?> <?=$user['surname']?> <?=$user['ak']?> Balance: <?= $user['balance'] ?> </span>
            <a href="http://localhost/php/bank/php/deposit_page.php?id=<?= $user['id'] ?>">DEPOSIT MONEY</a>
            <form action="http://localhost/php/bank/php/delete_account.php?id=<?= $user['id'] ?>" method="post">
                <button type="submit">Delete account</button>
            </form>
            <form action="http://localhost/php/bank/php/deposit_money.php?id=<?= $user['id'] ?>" method="post">
                <input type="text" name="balance">
                <button type="submit">Deposit money</button>
            </form>
        </li>
        <?php endforeach ?>
    </ul>
</body>

</html>