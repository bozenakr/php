<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
$color = $_GET['color'] ?? '';
?>

<!-- 1=crimson 0=skyblue -->
<body style="background-color: <?= $color ? 'crimson' : 'skyblue' ?>">

<?php

// 1.	Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
// Viena nuoroda su failo vardu
// Kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.

echo '<pre>';

// print_r($_GET);

?>

<a href="http://localhost/php/014a/1.php">RESET</a>
<a href="http://localhost/php/014a/1.php?color=1">RED</a>

</body>
</html>