<?php
echo '>>>>>>>> Masyvai <<<<<<<<';
echo '<br>';
echo '<br>';

//  1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
echo '=====1=====';
echo '<br>';

echo '<pre>';
// print_r(range(0,29));
// echo '<br>';

foreach (range(0,7) as $value) {
$masyvas[$value] = rand(5,25);
}

print_r ($masyvas);
echo '<br>';
echo '<br>';

// 2.	Naudodamiesi 1 uždavinio masyvu:
// a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
echo '=====2a=====';
echo '<br>';
echo '<br>';


$didesniNei10 = 0;
foreach ($masyvas as $value) {
if ($value > 10){
    $didesniNei10++;
}
}

echo "didesniu nei 10 yra: $didesniNei10";
echo '<br>';
echo '<br>';

// b)	Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
echo '=====2b=====';
echo '<br>';
echo '<br>';

foreach ($masyvas as $index => $value) {
 $maxValue = max($masyvas);
}
echo '<br>';
echo "max value $maxValue";

echo '<br>';


print_r(array_keys($masyvas, $maxValue));
echo '<br>';
echo '<br>';

// c)	Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
echo '=====2c=====';
echo '<br>';
echo 'poriniu indeksu reiksmiu suma';
echo '<br>';
$lyginiuIndexSuma = 0;
foreach ($masyvas as $index => $value) {
    if($index % 2 === 0) {
        $lyginiuIndexSuma += $value;
        // $lyginiuIndexSuma = $lyginiuIndexSuma + $value;
    }
}
echo $lyginiuIndexSuma;
echo '<br>';
echo '<br>';

// d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
echo '=====2d=====';
echo '<br>';
echo '<br>';
// $naujasMasyvas = [];

foreach ($masyvas as $index => $value) {
  $naujasMasyvas[] = ($value - $index);
}

print_r($naujasMasyvas);

echo '<br>';
echo '<br>';

// e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
echo '=====2e=====';
echo '<br>';
echo 'pridedu papildomus elementus i masyva';
echo '<br>';
//pridedu 3 elemenetus
foreach (range(1,3) as $_) {
    $masyvas[] = rand(5,25);
}

print_r ($masyvas);
echo '<br>';
echo '<br>';

// f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
echo '=====2f=====';
echo '<br>';
echo '<br>';

//destytojo sprendimas
// $rez = [];
// foreach($masyvas as $index => $value) {
//     $rez[$index % 2][] = $value;
// }

// print_r ($rez);
// echo '<br>';
// echo '<br>';

//antras sprendimas
foreach ($masyvas as $index => $value) {
  if ($masyvas[$index] % 2 === 0) {
    $masyvasPoriniai[] = $value;
  } else {
    $masyvasNePoriniai[] = $value;
  }
}
echo 'masyvas is poriniu';
echo '<br>';
print_r($masyvasPoriniai);

echo '<br>';

echo 'masyvas is neporiniu';
echo '<br>';
print_r($masyvasNePoriniai);

// g)	Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
echo '=====2g=====';
echo '<br>';
echo '<br>';


foreach ($masyvas as &$value) {
    $value = $value > 15 ? 0 : $value;
}
print_r ($masyvas);
echo '<br>';
echo '<br>';

// h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
echo '=====2h=====';
echo '<br>';
echo '<br>';
echo 'Pirmas value didesnis nei 10 ir jo index';
echo '<br>';

//sukuriu nauja masyva
foreach (range(0,10) as $value) {
$masyvasNew[$value] = rand(5,25);
}

print_r ($masyvasNew);
echo '<br>';
echo '<br>';

$rez = [];
foreach ($masyvasNew as $index => $value) {
    if ($value > 10) {
        $rez['index pirmojo skaiciaus didesnio nei 10'] = $index;
        break;
    }
}
print_r($rez);

// i)	Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo '=====2i=====';
echo '<br>';
echo '<br>';

//unset
foreach ($masyvasNew as $index => &$value) {
    if ($index % 2 == 0) {
        unset($masyvasNew[$index]);
    }
}

//nesutvarkytas masyvas (index ne is eiles)
print_r($masyvasNew);
echo '<br>';
echo '<br>';

//sutvarkom masyva (perindeksuojam)
$masyvasNew = array_values($masyvasNew);

print_r($masyvasNew);

// 3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
echo '=====3=====';
echo '<br>';
echo '<br>';
$raides = ['A', 'B', 'C', 'D'];
foreach (range(1,10) as $value) {
    $masyvasRaides[$value] = $raides[array_rand($raides)];
}

print_r ($masyvasRaides);
echo '<br>';

echo 'kiek yra kiekvienos raides';
echo '<br>';
print_r(array_count_values($masyvasRaides));
echo '<br>';
echo '<br>';

// 4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę. 
echo '=====4 sort=====';
echo '<br>';
echo '<br>';
sort($masyvasRaides);
print_r($masyvasRaides);
echo '<br>';
echo '<br>';

// 5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
echo '=====5=====';
echo '<br>';
echo '<br>';
echo '3 masyvai su raidem';
echo '<br>';

$raides = ['A', 'B', 'C', 'D'];
foreach (range(1,10) as $value) {
    $masyvasRaides1[$value] = $raides[array_rand($raides)];
}
foreach (range(1,10) as $value) {
    $masyvasRaides2[$value] = $raides[array_rand($raides)];
}
foreach (range(1,10) as $value) {
    $masyvasRaides3[$value] = $raides[array_rand($raides)];
}

print_r ($masyvasRaides1);
print_r ($masyvasRaides2);
print_r ($masyvasRaides3);

echo '<br>';
echo 'Masyvas is 3 masyvu su raidem';
echo '<br>';

//prie pirmo ipushinam antra ir trecia
foreach ($masyvasRaides1 as $index => $value) {
    $masyvasRaides1[$index] = $masyvasRaides1[$index] . $masyvasRaides2[$index] . $masyvasRaides3[$index];
}

$masyvas3Kartu = $masyvasRaides1;
print_r($masyvas3Kartu);
echo '<br>';
echo 'Masyvas su unikaliom reiksmem';
echo '<br>';

//darom nauja masyva is unikaliu reiksmiu su array_unique
$masyvasUnique = array_unique($masyvas3Kartu);
print_r($masyvasUnique);
echo '<br>';
echo '<br>';

//skaiciuojam masyvo length su count
$unikaliosKombinacijos = count($masyvasUnique);
echo "Kiek unikaliu kombinaciju yra: $unikaliosKombinacijos";

echo '<br>';
echo '<br>';

// 6.	Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
echo '=====6=====';
echo '<br>';
echo '<br>';

//Evgenijaus sprendimas
// echo 'masyvas pirmas su unikaliais skaiciais';
// echo '<br>';
// echo '<br>';

// function unique_randoms($min, $max, $count) {
//     $arr = array();
//     while (count($arr) < $count) {
//         $tmp = mt_rand($min, $max);
//         if (!in_array($tmp, $arr)) {
//             $arr[] = $tmp;
//         }
//     } return $arr;
// }

// $masyvasPirmas = unique_randoms(100, 999, 100);
// print_r ($masyvasPirmas);
// echo '<br>';
// echo '<br>';

// echo 'masyvas antras su unikaliais skaiciais';
// echo '<br>';
// echo '<br>';

// $masyvasAntras = unique_randoms(100, 999, 100);
// print_r ($masyvasAntras);
// echo '<br>';
// echo '<br>';

//Rasos sprendimas
$masyvasPirmas = []; 
while (count($masyvasPirmas) < 10) {   
    $randNumber = rand(100,999);   
    $isUnique = true; 
    foreach ($masyvasPirmas as $value1) {   
        if ($randNumber === $value1){
            $isUnique = false;}   
    } 
        if($isUnique) {   
            $masyvasPirmas[]=$randNumber; 
        } 
    }  
        echo '<br>Pirmas masyvas';  
        echo '<br>';
        print_r($masyvasPirmas);
echo '<br>';
echo '<br>';

$masyvasAntras = []; 
while (count($masyvasAntras) < 10) {   
    $randNumber = rand(100,999);   
    $isUnique = true; 
    foreach ($masyvasAntras as $value1) {   
        if ($randNumber === $value1){
            $isUnique = false;}   
    } 
        if($isUnique) {   
            $masyvasAntras[]=$randNumber; 
        } 
    }  
        echo '<br>Antras masyvas';  
        echo '<br>';
        print_r($masyvasAntras);

        echo '<br>';
        echo '<br>';
// 7.	Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. array diff
echo '=====7=====';
echo '<br>';
echo '<br>';
echo 'array diff -- masyvas is unikaliu reiksmiu is dvieju masyvu';

$masyvasDiff = array_diff($masyvasPirmas, $masyvasAntras);
echo '<br>';
print_r($masyvasDiff);

// 8.	Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. array intersect
echo '=====8=====';
echo '<br>';
echo '<br>';
echo 'array intersect -- masyvas is pasikartojanciu reiksmiu is dvieju masyvu';
echo '<br>';

$masyvasIntersect = array_intersect($masyvasPirmas, $masyvasAntras);

// $masyvasIntersect = array_intersect($masyvasPirmas, $masyvasAntras);
print_r($masyvasIntersect);

echo '<br>';
echo '<br>';
// 9.	Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
echo '=====9=====';
echo '<br>';
echo '<br>';
echo 'masyvas pirmas';
echo '<br>';
print_r($masyvasPirmas);
echo '<br>';
echo 'masyvas antras';
echo '<br>';
print_r($masyvasAntras);
echo '<br>';
echo 'masyvas sujungtas - index tai pirmo masyvo reiksmes, reiksmes tai antro masyvo reiksmes';
echo '<br>';


$masyvas9 = [];

foreach(range(0,9) as $index) {
    $masyvas9[$masyvasPirmas[$index]] = $masyvasAntras[$index];
}

print_r($masyvas9); 

// 10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

// 11.	Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30) -->
