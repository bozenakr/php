<?php
class Person {
    //cia koment
    public $name;
    public $age;
    
    public function info() {
        echo $this-> name . ', lat: ' . $this-> age . "<br>";
    }
}


$p1 = new Person();

$p1 -> name = "Adam";
$p1 -> age = 35;


echo $p1 -> name;
echo '<br>';
echo $p1 -> age;
echo '<br>';

$p1->info();

$p2 = new Person();

$p2->name = "Bartek";
$p2-> age = 50;


$p3 = new Person();
$p3->name = "Monika";
$p3->age = 10;

echo '<br>';

$p2-> info();
$p3-> info();



echo '<br>';

$p4 = new Person();
$p4->name = "Amelia";
$p4->age = 20;

$p4->info();

?>