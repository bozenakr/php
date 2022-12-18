<?php

session_start();
//pradedu sesija


//POST SCENARIJUS
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$rez = $_POST['x'] + $_POST['y'];
$_SESSION['mano suma'] = $rez;
//irasau rez i nauja kintamaji
header('Location: http://localhost/php/015/post.php');
die;
}


//GET SCENARIJUS
$rez = $_SESSION['mano suma'] ?? 'nieko dar nera';
//paimu kintamaji
unset($_SESSION['mano suma']);
//issitrinu sesija kad neprisimintu to pirmo vieno rezultato

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sumatorius</title>
</head>
<body>
    <h1> <?= $rez ?> </h1>
<!-- printinu savo kintamaji $rez -->
<form action="http://localhost/php/015/post.php?var=varna" method="post">
    <input type="hidden" name="want" value="logout">
    <input type="text" name="x"> + <input type="text" name="y">
<div>
    <button>make sum</button>
</div>
</form>

</body>
</html>