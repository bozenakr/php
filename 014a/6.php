<?php
// 6.	Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $backgroundColor = 'yellow';
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
        <form action="http://localhost/php/014a/6.php" method="get">
                <button tyle="submit">get - green</button>
            </form>
        <form action="http://localhost/php/014a/6.php" method="post">
                <button type="submit">post - yellow</button>
            </form>
    </div>
</body>
</html>