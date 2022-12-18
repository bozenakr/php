<?php
// 3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.

$color = $_GET['color'] ?? '222222';
//mano default color 222222
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body style="background-color: #<?= $color ?>">

<?php

echo '<pre>';
// print_r($_GET);

?>

<a href="http://localhost/php/014a/3.php">RESET</a>

<form action="http://localhost/php/014a/3.php">
    <input type="text" name="color">
    <button type="submit">GO</button>
</form>

</body>
</html>
