<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<?php


echo '<pre>';

print_r($_GET);

?>


<!-- trumpinimas vienos eilutes echo -->
<!-- <h1 style="color: <?php echo $_GET['color'] ?> ;">*********</h1> -->

<!-- kai irasau text=valio narsykleje -->
<!-- <h1 style="color: <?= $_GET['color'] ?> ;"><?= $_GET['text'] ?> </h1> -->


<a href="http://localhost/php/014/get.php?color=skyblue&text=blue">BLUE</a>
<a href="http://localhost/php/014/get.php?color=crimson&text=red">RED</a>
<a href="http://localhost/php/014/get.php?color=black">RESET</a>

<form action="http://localhost/php/014/get.php">
    <input type="text" name="color">
    <input type="text" name="text">
    <button type="submit">GO</button>
</form>

<!-- kai neirasau text=valio narsykleje ir noriu kad nemestu klaidos bet spausdintu default text -->
<h1 style="color: <?= $_GET['color'] ?> ;"><?= $_GET['text']?? 'default reiksme nera teksto' ?> </h1>


</body>
</html>