    <?php

echo '>>>>>>>> Funkcijos <<<<<<<<';
echo '<br>';
echo '<br>';

// 1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
echo '=====1=====';
echo '<br>';
echo '<pre>';

  function tekstas (string $text) : string
   {
      return "<h1>$text</h1>";
   }
  
echo tekstas('Labas');
echo '<br>';
echo '<br>';

// 2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašyta funkciją;
echo '=====2=====';
echo '<br>';

function duArgumentai (string $text, int $number)
   {
    return "<h1>$text</h1>$number";
   }
  
echo duArgumentai('Labas', 1);
echo '<br>';
echo '<br>';


// 3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
echo '=====3=====';
echo '<br>';
echo '<br>';


// 4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
echo '=====4=====';
echo '<br>';

function isKiekSveikuju (int $x) {
   $count = 0;
   for ($i = 2; $i < $x; $i++) {
   if ($x % $i === 0) {
      $count++;
   }
   } return $count;
}
echo "is kiek sveikuju sk. dalijasi be liekanos";
echo '<br>';
echo isKiekSveikuju(52);
echo '<br>';
echo isKiekSveikuju(75);
echo '<br>';
echo isKiekSveikuju(55);
echo '<br>';
echo '<br>';

// 5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
echo '=====5=====';
echo '<br>';
echo '<br>';

foreach (range(0,4) as $value) {
$masyvas100[$value] = rand(33,77);
}

echo 'Masyvo elementu dalikliai be liekanos:';
echo '<br>';
echo isKiekSveikuju($masyvas100[0]);
echo '<br>';
echo isKiekSveikuju($masyvas100[1]);
echo '<br>';
echo isKiekSveikuju($masyvas100[2]);
echo '<br>';
echo isKiekSveikuju($masyvas100[3]);
echo '<br>';
echo isKiekSveikuju($masyvas100[4]);
echo '<br>';
echo '<br>';

function mazejimo ($a, $b) {
    return isKiekSveikuju($a) < isKiekSveikuju($b);
}
echo 'masyvas pries sort';
echo '<br>';
print_r($masyvas100);
echo '<br>';
usort($masyvas100, 'mazejimo');
echo '<br>';
echo'masyvas sort pagal daliklių be liekanos kiekį mažėjimo tvarka';
echo '<br>';
print_r($masyvas100);
echo '<br>';

// 6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
echo '=====6=====';
echo '<br>';
echo '<br>';
foreach (range(0,4) as $value) {
$masyvas100[$value] = rand(333,777);
}

// function isKiekSveikuju (int $x) {
//    $count = 0;
//    for ($i = 2; $i < $x; $i++) {
//    if ($x % $i === 0) {
//       $count++;
//    }
//    } return $count;
// }


// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;


// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.
// 9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
// 10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 



