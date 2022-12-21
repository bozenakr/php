<?php
if (isset($_GET['go'] )) {
    header('Location:http://localhost/php/014a/5/blue.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: crimson">
  
<h1><a href="http://localhost/php/014a/5/red.php?go">GO BLUE</a></h1>

</body>
</html>