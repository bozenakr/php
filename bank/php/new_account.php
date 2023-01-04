<?php 
// print_r($_SERVER['REQUEST_METHOD']);

session_start();
// print_r($_SESSION);

//tikrinam dar karta ar yra pasetintas useris jei ne metam i login
if(!isset($_SESSION['user'])) {
header('Location: http://localhost/php/bank/php/login.php');
die;
}

if (!file_exists(__DIR__ . '/data')) {
    $arrUsers = [];
} else {
    $arrUsers = unserialize(file_get_contents(__DIR__ . '/data'));
}

foreach ($arrUsers as $user) {
    if ($_POST['ak'] ?? '') {   
    if ($_POST['ak'] == $user['ak']) {
        header('Location: http://localhost/php/bank/php/new_account.php?errorAK2');
        die;
    } }
}

$iban = 'LT' . rand(40,60) . 35000 . rand(10000000000,99999999999);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //vardas pavarde ilgesni nei 3
    $postAk = $_POST['ak'];
    if (strlen($_POST['name']) < 4 || strlen($_POST['surname']) < 4) {
        header('Location: http://localhost/php/bank/php/new_account.php?errorVardasPavarde');
        die;
        //asmens kodas -> 11 sk. -> 1sk(1-6) == 6sk. YY MM DD == 3sk. rand tą dieną gimusių asmenų eilės numeris == 1 rand
        //substr('abcdef', 1, 3);  // bcd// 
    } if ((strlen($postAk) != 11) || !is_numeric($postAk) || ($postAk[0] < 2 || $postAk[0] > 7) || (((int)(substr($postAk, 5, 2)) > 31) || ((int)(substr($postAk, 3, 2)) > 12))) {
        header('Location: http://localhost/php/bank/php/new_account.php?errorAK');
        die;
    } else {
        $id = rand(1000000, 10000000);
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $manogautas_post_iban = $_POST['iban'];
        // LT -> 2 sk. kontroliniai -> 5sk. -> banko kodas 35000 -> 11sk. random
        $ak = $_POST['ak'];
        $balance = 0;
        $arrUsers[] = ['id' => $id, 'name' => $name, 'surname' => $surname, 'iban' => $manogautas_post_iban, 'ak' => $ak, 'balance' => $balance];
        file_put_contents(__DIR__ .'/data', serialize($arrUsers));
        header('Location: http://localhost/php/bank/php/accounts.php?successAddAccount');
        die;
    }
}

// echo $iban;


if (isset($_GET['errorVardasPavarde'])) {
    $errorVardasPavarde = 'Vardas ir pavardė turi būti ilgesni nei 3 simboliai';
}

if (isset($_GET['errorAK'])) {
    $errorAK = 'Toks asmens kodas neegzistuoja';
}

if (isset($_GET['errorAK2'])) {
    $errorAK2 = 'Asmuo su tokiu asmens kodu jau turi sąskaitą';
}

require __DIR__ . './header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Create new account page</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="main-title">Naujos sąskaitos sukūrimas</h2>
        </div>
        <div class="new">
            <form action="http://localhost/php/bank/php/new_account.php" method="post">
                <div class="flex div-line">
                    <label class="label-new">Vardas</label>
                    <input class="input" type="text" name="name" required>
                </div>
                <div class="flex">
                    <label>Pavardė</label>
                    <input class="input" type="text" name="surname" class="" required>
                </div>
                <div class="flex">
                    <label>Asmens kodas</label>
                    <input class="input" type="text" name="ak" class="" required>
                </div>
                <div class="flex">
                    <label>Sąskaitos numeris (IBAN)</label>
                    <input class="input" readonly name="iban" class="" value="<?= $iban ?>">
                </div>
                <div class="flex-center">
                    <button type="submit" class="btn">Sukurti</button>
                </div>
            </form>
        </div>

    </div>


    <!-- ERROR -->
    <div class="new">
        <?php if (isset($errorVardasPavarde)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $errorVardasPavarde ?>
        </div>
        <?php endif ?>
    </div>
    <div class="new">
        <?php if (isset($errorAK)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $errorAK ?>
        </div>
        <?php endif ?>
    </div>
    <div class="new">
        <?php if (isset($errorAK2)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $errorAK2 ?>
        </div>
        <?php endif ?>
    </div>
</body>

</html>