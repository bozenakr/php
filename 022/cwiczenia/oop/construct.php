<?php
class Person {
    //cia koment
    public $name;
    public $age;

    public function __construct ($name = "anonim", $age = 0) {
        $this-> name = $name;
        $this-> age = $age;
    }
    
    public function info() {
        echo $this-> name . ', lat: ' . $this-> age . "<br>";
    }
    public function __destruct () {
        echo "Usunieto" . $this->name . "<br>";
    }
}

$p1 = new Person("Adam", 22);
$p1->info();

$p2= new Person("Bartek");
$p2->info();
$p3 = new Person();
$p3->info();


unset($p2);
unset($p3);
unset($p1);
?>