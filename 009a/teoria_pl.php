<?php
$tab = array('Ania', 'Bartek', 'Adam');
// echo $tab[2];
$tab[2] = 'Maciej';
// echo $tab[2];

$tab2[0] = 5;
$tab2[1] = 10;
$tab2[2] = 15;
echo $tab2[0];
echo '<br>';
echo '<br>';
echo $tab2[1];
echo '<br>';
echo '<br>';
echo $tab2[2];
echo '<br>';
echo '<br>';
$tab2[2] = 'tekst';
echo '<br>';
echo '<br>';
echo $tab2[0];
echo '<br>';
echo '<br>';
echo $tab2[1];
echo '<br>';
echo '<br>';
echo $tab2[2];

echo '<br>';
echo '<br>';


$tab3 = array('red' => 'czerwony', 'green' => 'zielony', 'blue' => 'niebieski');
echo '<br>';
echo '<br>';
echo $tab3['red'];
echo '<br>';
echo '<br>';
echo $tab3['blue'];
echo '<br>';
echo '<br>';
$tab3['green'] = 'green';
echo $tab3['green'];
echo '<br>';
echo '<br>';

$tab4['languague']['programming'] = 'php';
echo $tab4['languague']['programming'];
echo '<br>';
echo '<br>';

var_dump($tab);
echo '<br>';
echo '<br>';
print_r($tab);
echo '<br>';
echo '<br>';


//=============

echo count($tab);//array length
echo '<br>';
echo '<br>';

$tab = array('Ania', 'Bartek', 'Adam', 'Ola');
for ($i=0; $i<count($tab); $i++) {
    echo $tab[$i];
    echo '<br>';
}
echo '<br>';
echo '<br>';

foreach($tab as $key => $value) {
    echo " $key - $value";
    echo '<br>';
}