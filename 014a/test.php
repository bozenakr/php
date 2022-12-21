<?php

//mygtukas = kai pakliniki post method - susigeneruoja random 5,10 ir jis ta random perduoda i isorini faila saugykla (json, serialize) ir tam faile kaupiasi skaiciai, salia to mygtuko psl eina ul, li = spausdina tuos skaicius. post method ima skaiciu kuri gavo - pasideda i json isorini faila.

$skaiciai = rand(5,10);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   echo $skaiciai;
  $masyvas[] = $_POST['x'];
  print_r($masyvas);
//   $_SESSION
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <form action="http://localhost/php/014a/test.php" method="post">
        <button type="submit" name="x" value=<?= $skaiciai ?>>GO</button>
        <!-- <li></li> -->
    </form>

</body>

</html>