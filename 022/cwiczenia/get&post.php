<?php

if(isset($_GET['login']) && isset($_GET['pass'])) {
    echo '<p>GET</p><br>';
    echo $_GET['login'];
    echo '<br>';
    echo $_GET['pass'];
} else if (isset($_POST['login']) && isset($_POST['pass'])) {
    echo '<p>POST</p><br>';
    echo $_POST['login'];
    echo '<br>';
    echo $_POST['pass'];
} else {
   echo '<h1>nera duomenu, nieko neissiusta</h1>';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>

<body>
    <h3 style="text-align: center; width: 800px">GET & POST</h3>
    <div style=" display:flex; justify-content: space-between; align-items: center; width: 600px">
        <div>
            <p>GET</p>
            <form action="get&post.php" method="get">
                <p>Login:<input type="text" name="login" id=""></p>
                <p>Hasło:<input type="password" name="pass" id=""></p>
                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <p>POST</p>
            <form action="get&post.php" method="post">
                <p>Login:<input type="text" name="login" id=""></p>
                <p>Hasło:<input type="password" name="pass" id=""></p>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>


</body>

</html>