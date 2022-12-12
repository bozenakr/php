<?php

//1. Kintamieji ir sąlygos
echo '>>>>>>>> Kintamieji ir sąlygos <<<<<<<<';
echo '<br>';
echo '<br>';

//1.	Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '=====1=====';
echo '<br>';
echo '<br>';

$vardas = 'Bozena';
$pavarde = 'Krasevic';
$gimimoMetai = 1987;
$metai = 2022;
$kiekManMetu = $metai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $kiekManMetu metai(ų)";
echo '<br>';
echo '<br>';


//2.	Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

echo '=====2=====';
echo '<br>';


$pirmasKintamasis = rand(0, 4);
$antrasKintamasis = rand(0, 4);
echo '<br>';

echo "$pirmasKintamasis ir $antrasKintamasis";

echo '<br>';

if (!($pirmasKintamasis * $antrasKintamasis)) {
    echo 'Dalyba negalima nes 0';
} elseif ($pirmasKintamasis > $antrasKintamasis) {
    
    echo round($pirmasKintamasis / $antrasKintamasis, 2);
} else {
    echo round($antrasKintamasis / $pirmasKintamasis, 2);
}
echo '<br>';
echo '<br>';

//3.	Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

echo '=====3=====';
echo '<br>';

$kintamasis1 = rand(0, 25);
$kintamasis2 = rand(0, 25);
$kintamasis3 = rand(0, 25);
echo '<br>';

echo "$kintamasis1 ir $kintamasis2 ir $kintamasis3";
echo '<br>';

if ($kintamasis1 >= $kintamasis2 && $kintamasis1 <= $kintamasis3) {
    echo "Vidurinė reikšmė yra kintamasis1: $kintamasis1";
} elseif ($kintamasis1 >= $kintamasis3 && $kintamasis1 <= $kintamasis2) {
    echo "Vidurinė reikšmė yra kintamasis1: $kintamasis1";
} elseif ($kintamasis2 >= $kintamasis1 && $kintamasis2 <= $kintamasis3) {
    echo "Vidurinė reikšmė yra kintamasis2: $kintamasis2";
} elseif ($kintamasis2 >= $kintamasis3 && $kintamasis2 <= $kintamasis1) {
    echo "Vidurinė reikšmė yra kintamasis2: $kintamasis2";
} elseif ($kintamasis3 >= $kintamasis1 && $kintamasis3 <= $kintamasis2) {
    echo "Vidurinė reikšmė yra kintamasis3: $kintamasis3";
} elseif ($kintamasis3 >= $kintamasis2 && $kintamasis3 <= $kintamasis1) {
    echo "Vidurinė reikšmė yra kintamasis3: $kintamasis3";
}

echo '<br>';
echo '<br>';

//4.	Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
// Taisyklė pagal kurią galima sužinoti ar trikampis egzistuoja : a+b>c b+c>a a+c>b

echo '=====4=====';
echo '<br>';

$kintamasisA = rand(1, 10);
$kintamasisB = rand(1, 10);
$kintamasisC = rand(1, 10);
echo '<br>';

echo " kraštine a=$kintamasisA <br> kraštine b=$kintamasisB<br> kraštine c=$kintamasisC";
echo '<br>';

if (($kintamasisA + $kintamasisB) > $kintamasisC && ($kintamasisB + $kintamasisC) > $kintamasisA && ($kintamasisA + $kintamasisC) > $kintamasisB) {
    echo 'Galima sudaryti trikampį';
} else {
    echo 'Negalima sudaryti trikampio';
}

echo '<br>';
echo '<br>';

//5.	Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

echo '=====5=====';
echo '<br>';

$kintamasis1 = rand(0, 2);
$kintamasis2 = rand(0, 2);
$kintamasis3 = rand(0, 2);
$kintamasis4 = rand(0, 2);
echo '<br>';

echo "$kintamasis1 ir $kintamasis2 ir $kintamasis3 ir $kintamasis4";

echo '<br>';

$kiekNuliu = 0;
$kiekVienetu = 0;
$kiekDvejetu = 0;

if ($kintamasis1 === 0) {
    $kiekNuliu += 1;
} elseif ($kintamasis1 === 1) {
    $kiekVienetu += 1;
} elseif ($kintamasis1 === 2) {
    $kiekDvejetu += 1;
}

if ($kintamasis2 === 0) {
    $kiekNuliu += 1;
} elseif ($kintamasis2 === 1) {
    $kiekVienetu += 1;
} elseif ($kintamasis2 === 2) {
    $kiekDvejetu += 1;
}

if ($kintamasis3 === 0) {
    $kiekNuliu += 1;
} elseif ($kintamasis3 === 1) {
    $kiekVienetu += 1;
} elseif ($kintamasis3 === 2) {
    $kiekDvejetu += 1;
}

if ($kintamasis4 === 0) {
    $kiekNuliu += 1;
} elseif ($kintamasis4 === 1) {
    $kiekVienetu += 1;
} elseif ($kintamasis4 === 2) {
    $kiekDvejetu += 1;
}

echo "Nulių yra: $kiekNuliu";
echo '<br>';
echo "Vienetų yra: $kiekVienetu";
echo '<br>';
echo "Dvejetų yra: $kiekDvejetu";
echo '<br>';

echo '<br>';

// 6.	Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
echo '=====6=====';
echo '<br>';
echo '<br>';

$kintamasisNuo1iki6 = rand(1, 6);
echo $kintamasisNuo1iki6;
echo '<br>';

if ($kintamasisNuo1iki6 === 1) {
    echo "<h1>$kintamasisNuo1iki6</h1>";
} elseif ($kintamasisNuo1iki6 === 2) {
    echo "<h2>$kintamasisNuo1iki6</h2>";
} elseif ($kintamasisNuo1iki6 === 3) {
    echo "<h3>$kintamasisNuo1iki6</h3>";
} elseif ($kintamasisNuo1iki6 === 4) {
    echo "<h4>$kintamasisNuo1iki6</h4>";
} elseif ($kintamasisNuo1iki6 === 5) {
    echo "<h5>$kintamasisNuo1iki6</h5>";
} elseif ($kintamasisNuo1iki6 === 6) {
    echo "<h6>$kintamasisNuo1iki6</h6>";
}

echo '<br>';

//7.	Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
echo '=====7=====';
echo '<br>';
echo '<br>';

$kintamasis1 = rand(-10, 10);
$kintamasis2 = rand(-10, 10);
$kintamasis3 = rand(-10, 10);
echo '<br>';

echo " skaicius 1 tai $kintamasis1<br> skaicius 2 tai $kintamasis2<br> skaicius 3 tai $kintamasis3";

if ($kintamasis1 < 0) {
    echo "<h2 style='color: green;'>$kintamasis1</h2>";
} elseif ($kintamasis1 === 0) {
    echo "<h2 style='color: red;'>$kintamasis1</h2>";
} elseif ($kintamasis1 > 0) {
    echo "<h2 style='color: blue;'>$kintamasis1</h2>";
}

if ($kintamasis2 < 0) {
    echo "<h2 style='color: green;'>$kintamasis2</h2>";
} elseif ($kintamasis2 === 0) {
    echo "<h2 style='color: red;'>$kintamasis2</h2>";
} elseif ($kintamasis2 > 0) {
    echo "<h2 style='color: blue;'>$kintamasis2</h2>";
}

if ($kintamasis3 < 0) {
    echo "<h2 style='color: green;'>$kintamasis3</h2>";
} elseif ($kintamasis3 === 0) {
    echo "<h2 style='color: red;'>$kintamasis3</h2>";
} elseif ($kintamasis3 > 0) {
    echo "<h2 style='color: blue;'>$kintamasis3</h2>";
}

echo '<br>';

// 8.	Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite rand() funkcija nuo 5 iki 3000.

echo '=====8 žvakės=====';
echo '<br>';
echo '<br>';

$zvakiuKiekis = rand(5, 3000);

if ($zvakiuKiekis <= 1000) {
    $kainaSuNulineNuolaida = $zvakiuKiekis * 1;
    echo "Žvakių yra: $zvakiuKiekis vnt. Žvakių kaina: $kainaSuNulineNuolaida EUR.";
} elseif ($zvakiuKiekis <= 2000) {
    $kainaSu3ProcNuolaida = $zvakiuKiekis * (100 - 3) / 100;
    echo "Žvakių yra: $zvakiuKiekis vnt. Žvakių kaina: $kainaSu3ProcNuolaida EUR.";
} elseif ($zvakiuKiekis > 2000) {
    $kainaSu4ProcNuolaida = $zvakiuKiekis * (100 - 4) / 100;
    echo "Žvakių yra: $zvakiuKiekis vnt. Žvakių kaina: $kainaSu4ProcNuolaida EUR.";
}

echo '<br>';
echo '<br>';
// 9.	Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
echo '=====9 aritmetinis vidurkis=====';
echo '<br>';
echo '<br>';

$kintamasis1 = rand(0, 100);
$kintamasis2 = rand(0, 100);
$kintamasis3 = rand(0, 100);
echo "$kintamasis1 ir $kintamasis2 ir $kintamasis3";
echo '<br>';
echo '<br>';

echo 'Aritmetinis vidurkis: ';
$aritmetinisVidurkis1 = ($kintamasis1 + $kintamasis2 + $kintamasis3) / 3;
echo round($aritmetinisVidurkis1);
echo '<br>';
echo '<br>';

echo 'Aritmetinis vidurkis be mazesniu nei 10 ir didesniu nei 90: ';
if (($kintamasis1 < 10 or $kintamasis1 > 90) and ($kintamasis2 < 10 or $kintamasis2 > 90) and ($kintamasis3 < 10 or $kintamasis3 > 90)) {
     echo '0';
} elseif (($kintamasis1 >= 10 or $kintamasis1 <= 90) and ($kintamasis2 < 10 or $kintamasis2 > 90) and ($kintamasis3 < 10 or $kintamasis3 > 90)) {
    echo "$kintamasis1";
} elseif (($kintamasis2 >= 10 or $kintamasis2 <= 90) and ($kintamasis3 < 10 or $kintamasis3 > 90) and ($kintamasis1 < 10 or $kintamasis1 > 90)) {
    echo "$kintamasis2";
} elseif (($kintamasis3 >= 10 or $kintamasis3 <= 90) and ($kintamasis1 < 10 or $kintamasis1 > 90) and ($kintamasis2 < 10 or $kintamasis2 > 90)) {
    echo "$kintamasis3";
} elseif (($kintamasis1 >= 10 or $kintamasis1 <= 90) and ($kintamasis2 >= 10 or $kintamasis2 <= 90) and ($kintamasis3 < 10 or $kintamasis3 > 90)) {
    $ApkarpytasAritmetinisVidurkis = ($kintamasis1 + $kintamasis2) / 2;
    echo round("$ApkarpytasAritmetinisVidurkis");
} elseif (($kintamasis1 < 10 or $kintamasis1 > 90) and ($kintamasis2 >= 10 or $kintamasis2 <= 90) and ($kintamasis3 >= 10 or $kintamasis3 <= 90)) {
    $ApkarpytasAritmetinisVidurkis = ($kintamasis2 + $kintamasis3) / 2;
    echo round("$ApkarpytasAritmetinisVidurkis");
} elseif (($kintamasis1 >= 10 or $kintamasis1 <= 90) and ($kintamasis2 < 10 or $kintamasis2 > 90) and ($kintamasis3 >= 10 or $kintamasis3 <= 90)) {
    $ApkarpytasAritmetinisVidurkis = ($kintamasis1 + $kintamasis3) / 2;
    echo round("$ApkarpytasAritmetinisVidurkis");
} elseif (($kintamasis1 >= 10 or $kintamasis1 <= 90) and ($kintamasis2 >= 10 or $kintamasis2 <= 90) and ($kintamasis3 >= 10 or $kintamasis3 <= 90)) {
    $ApkarpytasAritmetinisVidurkis = ($kintamasis1 + $kintamasis2 + $kintamasis3) / 3;
    echo round("$ApkarpytasAritmetinisVidurkis");
}

echo '<br>';
echo '<br>';

// 10.	Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

echo '=====10 Laikrodis=====';
echo '<br>';
echo '<br>';


$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

$papildomasLaikas = rand(0, 300);


echo "$valandos val. - $minutes min. - $sekundes sek.";
echo '<br>';
echo '<br>';

echo "Papildomas laikas: $papildomasLaikas sek.";
echo '<br>';

$papildomosMinutes = $papildomasLaikas / 60;
$papildomosMinutesSuapvalintos = floor($papildomosMinutes);

echo "Papildomas laikas (min): $papildomosMinutesSuapvalintos min.";
echo '<br>';
$kiekLikoSekundziu = $papildomasLaikas - ($papildomosMinutesSuapvalintos * 60);
echo "Kiek liko nepanaudotų sekundžių: $kiekLikoSekundziu";

echo '<br>';
echo 'Skaitmeninis laikrodis su priedu';
echo '<br>';

$naujosMinutes = $minutes + $papildomosMinutesSuapvalintos;
$naujosSekundes = $sekundes + $kiekLikoSekundziu;

echo '<br>';

if ($naujosSekundes >= 60) {
    $naujosSekundesRezultate = $naujosSekundes - 60;
    $naujosMinutesRezultate = $naujosMinutes + 1;
    
    if ($naujosMinutesRezultate >= 60) {
        $naujosMinutesRezultateGal = $naujosMinutesRezultate - 60;
        $valandosRezultate = $valandos + 1;
        echo "$valandosRezultate val. - $naujosMinutesRezultateGal min. - $naujosSekundesRezultate sek.";
    } else {
        echo "$valandos val. - $naujosMinutesRezultate min. - $naujosSekundesRezultate sek.";
    }  
} else {
    echo "$valandos val. - $naujosMinutes min. - $naujosSekundes sek.";
}
echo '<br>';
echo '<br>';

//===============================================================
echo "===========Skaiciai/raides nuo iki=============";
echo '<br>';
echo '<br>';

//skaiciai nuo iki..
foreach (range(0, 10) as $number) {
    echo "$number ";
}

echo '<br>';
echo '<br>';

//skaiciai nuo iki (kas 10 pvz)
// array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
foreach (range(0, 100, 10) as $number) {
    echo "$number ";
}
echo '<br>';
echo '<br>';
//Raides nuo iki
// array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
foreach (range('a', 'i') as $letter) {
    echo $letter;
}
echo '<br>';
echo '<br>';
//raides nuo iki (nuo galo)
// array('c', 'b', 'a');
foreach (range('c', 'a') as $letter) {
    echo $letter;
}
echo '<br>';
echo '<br>';
