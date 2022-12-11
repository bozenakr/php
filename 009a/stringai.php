<?php

//2. Stringai (movie edition)

echo '>>>>>>>> Stringai (movie edition) <<<<<<<<';
echo '<br>';
echo '<br>';

//1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
echo '=====1=====';
echo '<br>';
echo '<br>';

$vardas = 'Keanu'; //5
$pavarde = 'Reeves'; //6

if (strlen($vardas) < strlen($pavarde)) {
    echo $vardas;
} if (strlen($vardas) > strlen($pavarde)) {
    echo $pavarde;
}

echo '<br>';
echo '<br>';

//2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
echo '=====2=====';
echo '<br>';
echo '<br>';

$vardas = 'Keanu';
$pavarde = 'Reeves';

echo strtoupper($vardas) . ' ' . strtolower($pavarde);

echo '<br>';
echo '<br>';

//3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '=====3=====';
echo '<br>';
echo '<br>';

$vardas = 'Keanu';
$pavarde = 'Reeves';

$pirmosRaides = substr($vardas, 0, 1) . substr($pavarde, 0, 1);
echo $pirmosRaides;

echo '<br>';
echo '<br>';

//4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

echo '=====4=====';
echo '<br>';
echo '<br>';

$vardas = 'Keanu';
$pavarde = 'Reeves';

$paskutines3Raides = substr($vardas, -3) . substr($pavarde, -3);
echo $paskutines3Raides;

echo '<br>';
echo '<br>';

//5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti. 
// Su str_ireplace

echo '=====5=====';
echo '<br>';
echo '<br>';

$filmas = 'An American in Paris';

echo str_ireplace('a', '*', $filmas);

echo '<br>';
echo '<br>';

//6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

echo '=====6=====';
echo '<br>';
echo '<br>';

$filmas = 'An American in Paris';

$kiekMazu_a = substr_count($filmas, 'a');
$kiekDideliu_A = substr_count($filmas, 'A');
$kiekKartu_aA = $kiekMazu_a + $kiekDideliu_A;

echo $kiekKartu_aA;

echo '<br>';
echo '<br>';

//7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. Balses - Aa Ąa Ee Ęę Ėė Ii Įį Yy Oo Uu Ųų Ūū

echo '=====7=====';
echo '<br>';
echo '<br>';

$filmas = 'An American in Paris';
$filmas2 = "Breakfast at Tiffany's";
$filmas3 = '2001: A Space Odyssey';
$filmas4 = "It's a Wonderful Life";


echo preg_replace('/[aeiyou]/i', '', $filmas);
echo '<br>';
echo preg_replace('/[aeiyou]/i', '', $filmas2);
echo '<br>';
echo preg_replace('/[aeiyou]/i', '', $filmas3);
echo '<br>';
echo preg_replace('/[aeiyou]/i', '', $filmas4);


echo '<br>';
echo '<br>';

//8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.--> padaromas masyvas - regex

echo '=====8=====';
echo '<br>';
echo '<br>';

$movie = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

preg_match('/\d/', $movie, $m);
echo '<pre>';

print_r($m[0]);
echo '<br>';

echo $movie;
echo '<br>';
echo '<br>';

//9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
echo '=====9=====';
echo '<br>';
echo '<br>';

$movie1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$masyvas1 = (str_word_count($movie1, 1));
$count1 = 0;

foreach ($masyvas1 as $value) {
    strlen($value) <= 5 ? $count1++ : $count1 = $count1;
}

echo $count1;

echo '<br>';
echo '<br>';

$movie2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$masyvas2 = (str_word_count($movie2, 1));
$count2 = 0;

foreach ($masyvas2 as $x) {
    strlen($x) <= 5 ? $count2++ : $count2 = $count2;
}

echo $count2;
echo '<br>';
echo '<br>';

//10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
echo '=====10=====';
echo '<br>';
echo '<br>';

// $raides = 'abcdefghijklmnopqrstuvwxyz';

// echo $raides[rand(0,25)].$raides[rand(0,25)].$raides[rand(0,25)];

$raides = range ('a', 'z');

 echo $raides[rand(0,25)].$raides[rand(0,25)].$raides[rand(0,25)];



//Papildomas.
// 11.	Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
