<?php

// require __DIR__ . '/Petras/Read.php';
// require __DIR__ . '/Ona/Read.php';

//automatinis autoloaderis
require __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(function ($wantClassName) {
// echo '<br>1- ' . $wantClassName;
// });


// spl_autoload_register(function ($wantClassName) {
// require __DIR__ . '/'.$wantClassName . '.php';
// });

// $a = new Abc;
// $b = new Bbc;

$p = new Petras\Read;
$o = new Ona\Read;

echo $p->what;
echo '<br>';
echo '<br>';
echo $o->what;