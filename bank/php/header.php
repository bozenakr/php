<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container header">
            <div class="header-menu">
                <img class="logo" src="../img/logoIdea.png" alt="logo">
                <a class="header-link" href="http://localhost/php/bank/php/accounts.php">Home</a>
                <a class="header-link" href="http://localhost/php/bank/php/new_account.php">New account</a>
            </div>
            <div class="header-right">
                <div class="header-user">Sveiki, <?= $_SESSION['user']['name'] ?>! </div>
                <form action="http://localhost/php/bank/php/login.php?logout ?>" method="post">
                    <button class="btn btn-logout" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </header>
</body>

</html>