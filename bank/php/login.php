<?php
session_start();
print_r($_SESSION);

$users = unserialize(file_get_contents(__DIR__ . '/users'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_GET['logout'])) {
    //unsetinu is sesijos useri - jei sesijos neliks isisavinto userio - metam i login psl
    unset($_SESSION['user']);
    header('Location: http://localhost/php/bank/php/login.php');
    die;
}
    foreach($users as $user) {
        if ($user['name'] == $_POST['name']) {
        if ($user['psw'] == md5($_POST['psw'])) {
            $_SESSION['user'] = $user;
            header('Location: http://localhost/php/bank/php/accounts.php');
            die;
        }
    }
}
            header('Location: http://localhost/php/bank/php/login.php');
            die;
}


//setinam error
if (isset($_GET['error'])) {
    $error = 'User name or password error';
}

//jei nera error rodo si html
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body class="bg">
    <div class="login-box">
        <h2>Login</h2>
        <form action="http://localhost/php/bank/php/login.php" method="post">
            <div class="user-box">
                <input class="input-login" type="text" name="name" placeholder="" required="">
                <label class="input-label">Name</label>
            </div>
            <div class="user-box">
                <input class="input-login" type="password" name="psw" placeholder="" required="">
                <label class="input-label">Password</label>
            </div>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

    <?php if(isset($error)) : ?>
    <div class="">
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    </div>
    <?php endif ?>
</body>

</html>