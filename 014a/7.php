<?php
// 7.	Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $backgroundColor = 'yellow';
    // header('Location: http://localhost/php/014a/7.php');????
    // die;
}  else {
    $backgroundColor = 'green';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>6</title>
</head>
<body style="background-color: <?= $backgroundColor ?>">
    <div>
        <form action="http://localhost/php/014a/7.php" method="get">
                <button tyle="submit">get - green</button>
            </form>
        <form action="http://localhost/php/014a/7.php" method="post">
                <button type="submit">post - yellow</button>
            </form>
    </div>
</body>
</html>