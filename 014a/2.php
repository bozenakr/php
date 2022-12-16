<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #<?= $_GET['color'] ?? '' ?>;">

<?php

// 2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.

echo '<pre>';

// print_r($_GET);

?>

<a href="http://localhost/php/014a/2.php?color=87CEEB">change color to skyblue</a>
<a href="http://localhost/php/014a/2.php?color=fff">change color to white</a>

</body>
</html>