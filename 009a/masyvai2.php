<?php
echo '>>>>>>>> Masyvai 2<<<<<<<<';
echo '<br>';
echo '<br>';

// Masyvai daugiamačiai

// 1.	Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
echo '=====1=====';
echo '<br>';
echo '<pre>';

$mas = [];
foreach (range(1,2) as $i1) {
    foreach (range(1,5) as $i2) {
        $mas[$i1][$i2] = rand(5,25);
    }
}
print_r($mas);
echo '<br>';

// 2.	Naudodamiesi 1 uždavinio masyvu:
// a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '=====2a=====';
echo '<br>';
echo 'Kiek masyve yra elementų didesnių už 10';
echo '<br>';

$didesniNei10 = 0;

foreach($mas as $small) {
    foreach($small as $val) {
        $didesniNei10 += $val > 10 ? 1 : 0;
    }
}
print_r($didesniNei10);
echo '<br>';
echo '<br>';

// b)	Raskite didžiausio elemento reikšmę;
echo '=====2b=====';
echo '<br>';
echo 'Raskite didžiausio elemento reikšmę';
echo '<br>';

$maxReiksme = 0;

foreach($mas as $small) {
    foreach($small as $val) {
        $maxReiksme = max($maxReiksme, $val);
    }
}
echo $maxReiksme;

echo '<br>';
echo '<br>';

// c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '=====2c=====';
echo '<br>';
echo 'Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas';
echo '<br>';

$indeksuSuma = [];

foreach($mas as $small) {
    foreach($small as $index => $val) {
        $indeksuSuma[$index] = ($indeksuSuma[$index] ?? 0) + $val;
    }
}
print_r($indeksuSuma );

echo '<br>';
echo '<br>';

// d)	Visus antro lygio masyvus “pailginkite” iki 7 elementų - pridedam dar 2
echo '=====2d=====';
echo '<br>';
echo 'Visus antro lygio masyvus “pailginkite” iki 7 elementų - buvo 5 el. tai prailginam dar 2';
echo '<br>';

foreach($mas as &$small) {
    foreach(range(1, 2) as $_) {
        $small[] = rand(5, 25);
    }
}

print_r($mas);
echo '<br>';

// e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo '=====2e=====';
echo '<br>';
echo 'Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą.<br>T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai';
echo '<br>';

$naujasMasyvas = array_map(fn($value) => array_sum($value), $mas);

print_r($naujasMasyvas);
echo '<br>';

// 3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
echo '=====3=====';
echo '<br>';
echo 'masyvas is submasyvu su random raidem pasortintom pagal abecele';
echo '<br>';

//sort - sudeda indexus tvarkingai 0,1,2..
//usort - sudeda indeksus pagal php - no order

 $masyvasDidelisABC = [];
 foreach(range(1,3) as $_) {
    $masyvasMazasABC = [];
    for($i=0; $i < rand(2,20); $i++) {
        $masyvasMazasABC[] = range('A', 'Z')[rand(0,25)];
        sort($masyvasMazasABC);
    }
    $masyvasDidelisABC[] = $masyvasMazasABC;
 }

 print_r($masyvasDidelisABC);


//chr — Generate a single-byte string from a number
//OK - chr rand - su ascii raidziu kodais - dideles raides 65-90, mazos 97-122
// $masyvaiRaides = [];
// foreach (range(1,3) as $i1) {
//     foreach (range(0,(rand(1,19))) as $i2) {
//         $masyvaiRaides[$i1][$i2] = chr(rand(65,90));
// }}
// echo '<br>';
// echo '<br>';

// print_r($masyvaiRaides);
// echo '<br>';

//ima tik random raides is mano sukurto masyvo su raidem
// $raides = ['A', 'B', 'C', 'D'];
// $masyvaiRaides = [];
// foreach (range(1,10) as $i1) {
    //     foreach (range(0,(rand(0,19))) as $i2) {
        //         $masyvaiRaides[$i1][$i2] = $raides[array_rand($raides)];
        //     }
        // }
        // print_r($masyvaiRaides);
        // echo '<br>';

// echo '<br>'; 
// 4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
echo '=====4=====';
echo '<br>';
echo 'sort pagal submasyvu ilgi';
echo '<br>';

function sortCount ($a, $b) {
    return count($a) - count($b);
}

usort($masyvasDidelisABC, 'sortCount');

//viena eilute
// usort($masyvasDidelisABC, fn($a, $b) => (count($a) - count($b)));

print_r($masyvasDidelisABC);
echo '<br>';
echo '<br>';


// 5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
// [user_id => xxx, 
// place_in_row => xxx]
echo '=====5=====';
echo '<br>';

$masyvas30 = range(1,3);

foreach ($masyvas30 as &$value) {
  $user_id = rand(1, 1000000);
  $place_in_row = rand(0, 100);
  $value = ['user_id' => $user_id, 'place_in_row' => $place_in_row];
}

print_r($masyvas30);
echo '<br>';
echo '<br>';
// 6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
echo '=====6 didejanti pagal user_id=====';
echo '<br>';

function didejanti ($a, $b) {
    return $a['user_id'] > $b['user_id'];
}

//usort — Sort an array by values using a user-defined comparison function
usort($masyvas30, 'didejanti');
print_r ($masyvas30);
echo '<br>';
echo '<br>';

echo '=====6 mazejanti pagal place_in_row=====';
echo '<br>';

function mazejanti ($a, $b) {
    return $a['place_in_row'] < $b['place_in_row'];
}
usort($masyvas30, 'mazejanti');
print_r ($masyvas30);


// 7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
// 8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
// 9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
// 10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
// 11.	Duotas kodas, generuojantis masyvą:
// do {
//     $a = rand(0, 1000);
//     $b = rand(0, 1000);
// } while ($a == $b);
// $long = rand(10,30);
// $sk1 = $sk2 = 0;
// echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
// $c = [];
// for ($i=0; $i<$long; $i++) {
//     $c[] = array_rand(array_flip([$a, $b]));
// }
// echo '<h4>Masyvas:</h4>';
// echo '<pre>';
// print_r($c);
// echo '</pre>';
// Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
// NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
// NEGALIMA! naudoti jokių regex ir string funkcijų.
// GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

// Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

// Atsakymą reikia pateikti formatu:
// echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

// Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
