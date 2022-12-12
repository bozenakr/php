<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/ciklai.css">
</head>
<body>
    
<?php

//CIKLAI
echo '>>>>>>>> Ciklai <<<<<<<<';
echo '<br>';
echo '<br>';

//1.	Naršyklėje nupieškite linija iš 400 “*”. 
// a)	Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b)	Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”;
echo '=====1=====';
echo '<br>';
echo '<br>';
//linija is 40 '*'
$size = 40;
for ($i=0; $i<$size; $i++) {
    echo '*';
}

echo '<br>';
echo '<br>';

echo '=====1a=====';
echo '<br>';
echo '<br>';

?>
<div class="container">

<?php
$size = 100;
for ($i=0; $i<$size; $i++) {
    echo "<div>*</div>";
}
?>
</div>

<?php
echo '=====1b=====';
echo '<br>';
echo '<br>';

$size = 400;
$size2 = 50;
for ($i=0; $i < ($size / $size2); $i++) {
    for ($a=0; $a<$size2; $a++) {
        echo '*';
    }
    echo '<br>';
}

echo '<br>';
echo '<br>';


// 2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
echo '=====2=====';
echo '<br>';
echo '<br>';

$didesniNei150 = 0;

foreach(range(1, 300) as $numbers) {
    $randomNumber = rand(0,300);
if ($randomNumber > 150) {
    $didesniNei150++;
} if ($randomNumber > 275) {
    $color = 'crimson';
} else {
    $color = 'black';
}
echo "<span style='color: $color'>$randomNumber </span>";//tarpas po kintamojo
// echo $randomNumbers . ' ';//irgi prideda tarpa
}

echo '<br>';
echo '<br>';
echo "Didesni nei 150: $didesniNei150 skaiciai";
echo '<br>';
echo '<br>';

// 3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane. (implode)
echo '=====3=====';
echo '<br>';
echo '<br>';


foreach (range(1, rand(3000, 4000)) as $nr) {
    if ($nr % 77 === 0) {
        $numeriai = "$nr,";
        echo $numeriai;
        echo rtrim($numeriai, ",");
        echo "\n";
    }
}

echo '<br>';
echo '<br>';
//RTRIM funkcija pvz
$string = "This is test string123";
echo $string . "\n";
// rtrim function
echo '<br>';
echo rtrim($string, "3");
echo "\n";
echo '<br>';
echo '<br>';

//Sprendimas su masyvu
// $numbersIs77 = [];
// foreach (range(1, rand(3000, 4000)) as $nr) {
//     if ($nr % 77 === 0) {
//         $numberIs77[] = $nr;
//     }
// }
// $suKableliais = implode(",", $numberIs77);

// echo $suKableliais;

// echo '<br>';
// echo '<br>';

// 4.	Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
echo '=====4=====';
echo '<br>';
echo '<br>';

$krastine = 10;
for ($i=0; $i<$krastine; $i++) {
    for ($a=0; $a<$krastine; $a++) {
        echo "<span style='margin-right: 10px;'>*</span>";
    }
    echo '<br>';
}

echo '<br>';
echo '<br>';

// 5.	Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
echo '=====5????=====';
echo '<br>';
echo '<br>';

$krastine = 10;
for ($i=1; $i<$krastine; $i++) {
    for ($a=0; $a<(10-$i); $a++) {
        echo "<span style='margin-right: 10px;'>*</span>";
    }
    echo '<br>';
}

echo '<br>';
echo '<br>';

// 6.	Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// a)	Iškritus herbui;
// b)	Tris kartus iškritus herbui;
// c)	Tris kartus iš eilės iškritus herbui;
echo '=====6=====';
echo '<br>';
echo '<br>';

$metamMoneta = rand(0,1);
if ($metamMoneta === 0) {
    echo 'H - herbas';
} else {
    echo 'S - skaicius';
}

echo '<br>';
echo '<br>';

echo '==6a==';
// a)	Iškritus herbui - stabdome
echo '<br>';
echo '<br>';

$metimai = 0;
do {
    $metamMoneta = rand(0,1);
    echo "$metamMoneta ";
    $metimai++;
}

while ($metamMoneta !== 0);
echo '<br>';
echo "$metimai metimas - iskrito herbas (0)";
echo '<br>';
echo '<br>';

echo '==6b==';
// b)	Tris kartus iškritus herbui - stabdome
echo '<br>';
echo '<br>';

$metimai3Herbai = 0;
do {
    $metamMoneta = rand(0,1);
    echo "$metamMoneta  ";
    if ($metamMoneta === 0) {
        $metimai3Herbai++;
    }
}
while ($metimai3Herbai !== 3);
echo '<br>';
echo "Iskrito 3 herbai - stabdom";

echo '<br>';
echo '<br>';

echo '==6c==';
// a)	Tris kartus iš eilės iškritus herbui - stabdome
echo '<br>';
echo '<br>';

$metimai3HerbaiIsEiles = 0;
do {
    $metamMoneta = rand(0,1);
    echo "$metamMoneta  ";
    if ($metamMoneta === 1) {
        $metimai3HerbaiIsEiles = 0;
    }
    if ($metamMoneta === 0) {
        $metimai3HerbaiIsEiles++;
    }
}
while ($metimai3HerbaiIsEiles !== 3);
echo '<br>';
echo "Iskrito 3 herbai is eiles - stabdom";

echo '<br>';
echo '<br>';
// 7.	Kazys ir Petras žaidžia Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand(). Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
echo '=====7=====';
echo '<br>';
echo '<br>';

$PetrasTaskai = 0;
$KazysTaskai = 0;

do {
    $PetrasZaidzia = rand(10,20);
    $KazysZaidzia = rand(5,25);

    $PetrasTaskai = $PetrasTaskai + $PetrasZaidzia;
    $KazysTaskai = $KazysTaskai + $KazysZaidzia;
}
while ($PetrasTaskai < 222 && $KazysTaskai < 222);

echo "Petras turi $PetrasTaskai tasku";
echo '<br>';
echo '<br>';
echo "Kazys turi $KazysTaskai tasku";

echo '<br>';
echo '<br>';

if ($PetrasTaskai > $KazysTaskai) {
    echo "Partija laimejo Petras";
} elseif ($KazysTaskai > $PetrasTaskai) {
    echo "Partija laimejo Kazys";
} else {
    echo "----Lygiosios----";
}
echo '<br>';
echo '<br>';

// 8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis). 2 CIKLAI!!
echo '=====8=====';
echo '<br>';
echo '<br>';

//spalva # + random 6 zenklai
$zenklai = '0123456789ABCDEF';
$color = '#';
// for ($z = 0; $z < 6; $z++) {
//     $color .= $zenklai[rand(0, 15)]; //random spalva ciklas?
// }
// echo $color;

//color: #' . dechex(rand(0,16777215)) . ' //random spalva
echo '<br>';
echo '<br>';

   $size = 11;
    // upside pyramid
    for ($i = 1; $i <= $size; $i++) {
        // printing spaces
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo '<span style="color: #' . dechex(rand(0,16777215)) . ';">*</span>';
        }
        echo "<br>";
    }

    // downside pyramid
    for ($i = 1; $i <= $size - 1; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
             echo '<span style="color: #' . dechex(rand(0,16777215)) . ';">*</span>';
        }
        echo "<br>";
    }

// 9.	(uždavinio nėra, nespręsti).
// 10.	Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite 
// pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// a)	“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
// b)	“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
echo '=====10a=====';
echo '<br>';
echo '<br>';

$viniesIlgis = 85;//mm
$smugiaiIlgis = 0;
$kiekSmugiu = 0;
do {
   $mazasSmugis = rand(5,20);//mm
   echo "<br>";
   echo "Smugio nr $kiekSmugiu";
   $kiekSmugiu++;
   echo "<br>";
   echo "Random mazas smugis ilgis $mazasSmugis";
   echo "<br>";
   $smugiaiIlgis = $smugiaiIlgis + $mazasSmugis;
   echo "Smugiu ilgiu suma $smugiaiIlgis";
   echo '<br>';
}
while($smugiaiIlgis <= $viniesIlgis * 1); //85*5 = 425mm
echo "<br>";

echo "<span style='color: crimson; font-size: 20px; font-weight: bold'>Kiek reikia mazu smugiu $kiekSmugiu</span>";//pirmo smugio nr - index 0
echo '<br>';
echo '<br>';


echo '=====10b=====';
echo '<br>';
echo '<br>';
$viniesIlgis = 85;//mm
$smugiaiIlgis = 0;
$kiekSmugiu = 0;
do {
    if(rand(0,1) === 0) {
        $didelisSmugis = 0;
    } else {
            $didelisSmugis = rand(20,30);//mm
        }
    echo "<br>";
    echo "Smugio nr $kiekSmugiu";
    $kiekSmugiu++;
    echo "<br>";
    $smugiaiIlgis = $smugiaiIlgis + $didelisSmugis;
   echo "Random didelis smugis ilgis $didelisSmugis";
   echo "<br>";
   echo "Smugiu ilgiu suma $smugiaiIlgis";
   echo '<br>';
}
while($smugiaiIlgis <= $viniesIlgis * 1); //85*5 = 425mm
echo "<br>";

echo "<span style='color: crimson; font-size: 20px; font-weight: bold'>Kiek reikia dideliu smugiu $kiekSmugiu</span>";//pirmo smugio nr - index 0
echo '<br>';
echo '<br>';


// 11.	Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.

?>
</body>
</html>
