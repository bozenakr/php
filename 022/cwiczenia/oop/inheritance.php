<?php

class Animal {
    public $name;
    public $age;

    public function sayHi() {
        echo "Hi<br>";
    }
}

class Cat extends Animal {

}

$cat = new Cat();
$cat->sayHi();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>