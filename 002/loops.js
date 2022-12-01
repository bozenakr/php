// 1.	Sukurkite tris kintamuosius ir priskirkite jiems skirtingus sveikus skaičius iš intervalo 5…25;
// A.Paskaičiuokite jų sumą ir priskirkite ją kintamajam.Pasinaudokite console.log atspauzdinkite sumos kintamąjį;
console.log('==========1==========');
console.log('------a------');

const rand = (a, b) => Math.floor(Math.random() * (b - a + 1) + a);

const a = rand(5, 25);
const b = rand(5, 25);
const c = rand(5, 25);
const sum = a + b + c;

console.log(a, b, c);
console.log(sum);

// B.Sudėkite skaičius į stringo tipo kintamąjį ir jį atspauszdinkite pasinaudodami console.log;
console.log('------b------');
let str = "";

str = str + a + b + c;

console.log(str);



// C.Sudėkite skaičius į stringo tipo kintamąją padarant tarp skaičių tarpus ir jį atspauszdinkite pasinaudodami console.log;
console.log('------c------');
let str2 = "";

str2 = str2 + a + " " + b + " " + c;

console.log(str2);


// D.Sudėkite skaičius į stringo tipo kintamąją padarant tarp skaičių tarpus ir gale pridedėkite trijų skaičių sumą, paskaičiuotą A dalyje.Atspausdinkite gautą stringo tipo kintąmąjį pasinaudodami console.log;
console.log('------d------');

str2 = str2 + " " + sum;

console.log(str2);

//2. Sukurkite vieną kintamąjį, jam priskirkite skaičių (iš intervalo 5…10), kurį sugeneruoja funkcija rand(5, 10) ir jį atspauszdinkite pasinaudojus console.log;
console.log('==========2==========');

let manoRandomSkaicius = rand(5, 10);

console.log(manoRandomSkaicius);

// 3. Sukurkite kintamąjį ir jam priskirkite stringą “Labas”. Pasinaudodami ciklu ir console.log atspauzdinkite kintamąjį 5 kartus;
console.log('==========3==========');

let greeting = "Labas"

for (let i = 0; i < 5; i++) {
    console.log(greeting);
}


// 4. Pasinaudojus ciklu ir ir console.log atspauzdinkite kintamąjį iš 2 uždavinio 7 kartus;
console.log('==========4==========');

for (let i = 0; i < 7; i++) {
    console.log(manoRandomSkaicius);
}

// 5. Pasinaudojus ciklu ir ir console.log atspauzdinkite kintamąjį iš 2 uždavinio tiek kartų, koks skaičius yra sugeneruotas;
console.log('==========5==========');

for (let i = 0; i < manoRandomSkaicius; i++) {
    console.log(manoRandomSkaicius);
}

// 6. Pasinaudojus ciklu ir ir console.log atspauzdinkite kintamąjį iš 2 uždavinio tiek kartų, koks skaičius yra sugeneruotas, bet tik tada jeigu jis didesnis už 7;
console.log('==========6==========');

if (manoRandomSkaicius > 7) {
    for (let i = 0; i < manoRandomSkaicius; i++) {
        console.log(manoRandomSkaicius);
    }
}

// 7. Deklaruokite kintamąjį už ciklo ribų.Ciklo viduje generuokite atsitiktinius skaičius funkcija rand(), kurie yra iš intervalo 10…20. Ciklą kartokite 5 kartus;
// A.Ciklo viduje sugeneruotą reikšmę priskirkite kintamajam, kurį sukūrėte už ciklo ribų ir jį atspauzdinkite;

console.clear();
console.log('==========7==========');
console.log('------a------');

let value;
for (let i = 0; i < 5; i++) {
    value = rand(10, 20);
    console.log(value);
}

// B.Skaičiuokite ciklo viduje generuojamų reikšmių sumą, ją priskirdami kintamajam, kurį sukūrėte už ciklo ribų.Rezultatą atspauzdinkite pasinaudodami console.log už ciklo ribų;
console.log('------b------');

let total = 0;
for (let i = 0; i < 5; i++) {
    total += rand(10, 20);
}

console.log(total);

// C.Skaičius, generuojamus ciklo viduje dėkite į stringo tipo kintamąjį tarp skaičių darydami tarpą.Stringo tipo kintamąjį atspazdinkite už ciklo ribų jam pasibaigus;
console.log('------c------');
let value2;
let string = "";

for (let i = 0; i < 5; i++) {
    value2 = rand(10, 20);
    string += value2 + " ";
}

string = string.trimEnd();
console.log(string);

// D.Skaičius, generuojamus ciklo viduje dėkite į stringo tipo kintamąjį tarp skaičių darydami tarpą.Ciklui pasibaigus prie stringo tipo kintamojo pridėkite ciklo viduje generuotų skaičių sumą, paskaičiuotą kaip B dalyje.Stringo tipo kintamąjį atspausdinkite pasinaudodami console.log;
console.log('------d------');
let value3;
let stringNew = "";
let total2 = 0;

for (let i = 0; i < 5; i++) {
    value3 = rand(10, 20);
    total2 += value3;
    stringNew += value3 + " ";
}

stringNew += total2;
console.log(stringNew);

// 8. Deklaruokite kintamąjį(jeigu reikia kelis kintamuosius) už ciklo ribų.Ciklo viduje generuokite atsitiktinius skaičius funkcija rand(), kurie yra iš intervalo 10…25. Ciklą kartokite tol, kol ciklo viduje bus sugeneruotas skaičius mažesnis nei 12;
// A.Ciklo viduje sugeneruotą reikšmę priskirkite kintamajam, kurį sukūrėte už ciklo ribų ir jį atspauzdinkite;
// B.Suskaičiuokite kiek iteracijų padarėte ir jų kiekį atspauzdinkite pasinaudodami console.log už ciklo ribų jam pasibaigus;
// C.Skaičiuokite ciklo viduje generuojamų reikšmių sumą, atmesdami(neskaičiuodami) skaičius, kurie yra didesni nei 18, ją priskirdami kintamajam, kurį sukūrėte už ciklo ribų.Rezultatą atspauzdinkite pasinaudodami console.log už ciklo ribų;
// D.Sumą skaičiuokite kaip C dalyje, bet papildomai susikurkite kintamąjį, kuriame suskaičiuokite kiek reikšmių atmetėte(nesumavote).Rezultatą su suma ir atmestų reikšmių kiekiu atspauzdinkite pasinaudodami console.log už ciklo ribų;
// E.Suskaičiuokite kiek tarp cikle atsitiktinai generuojamų reikšmių yra lyginių ir kiek nelyginių skaičių.Rezultatą atspauzdinkite pasinaudodami console.log už ciklo ribų jam pasibaigus.
//     F.Ciklą iš dalies B kartokite tol, kol to ciklo iteracijų kiekis bus didesnis nei 20(vieno ciklo).Paskaičiuokite kiek pakartojimų buvo atlikta ir rezultatą atspauzdinkite pabaigoje.

console.clear();
console.log('==========8==========');

let x;
let iterationCount = 0;
let numSum = 0;
let discardCount = 0;

let even = 0;
let odd = 0;

while (true) {
    x = rand(10, 25);
    console.log(x);
    x % 2 === 0 ? even += 1 : odd += 1;
    iterationCount += 1;

    if (x < 18) {
        numSum += x;
    } else {
        discardCount += 1;
    }

    if (x < 12) {
        break;
    }
}

console.log("\nIteration count: ", iterationCount);
console.log("Sum of numbers less then 18: ", numSum);
console.log("Number of discarded values >= 18: ", discardCount);
console.log("Even count:", even, "\nOdd count:", odd);

console.log("------------");
let iterationCount2 = 0;
let cicleCount = 0;
while (iterationCount2 <= 20) {
    iterationCount2 = 0;
    cicleCount += 1;
    while (iterationCount2 <= 20) {

        x = rand(10, 25);
        iterationCount2 += 1;

        if (x < 12) {
            break;
        }
    }
}

console.log("\nCiklu skaicius", cicleCount);

console.log("------------");

// 9. Ciklo viduje generuokite atsitiktinius skaičius funkcija rand(), kurie yra iš intervalo 5 - 10. Ciklą kartokite tol, kol ciklo viduje bus sugeneruotas skaičius 5;
// A.Ciklo viduje paleiskite dar vieną ciklą kurį kartokite tiek kartų, koks skaičius buvo sugeneruotas.Paskaičiuokite kiek iteracijų padarė išorinis ciklas ir kiek bendrai iteracijų padarė vidinis ciklas.Rezultatus atspauzdinkite pasinaudodami console.log už ciklo ribų jam pasibaigus;
// B.Padarykite taip, kad išorinis ciklas pasibaigtų kai 5 yra sugeneruojamas ne pirmą, bet trečią kartą ir paskaičiuokite iteracijas analogiškai kaip A dalyje;
// C.Padarykite analogiškai kaip B dalyje, bet tik kai 5 yra sugeneruojami 3 kartus iš eilės;


// 10. Kazys ir Petras žaidžiai bingo.Petras per vieną partiją surenka taškų kiekį nuo 10 iki 20, Kazys - surenka taškų kiekį nuo 5 iki 25. Console.log išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija rand().Žaidimą laimi tas, kas greičiau surenka 222 taškus.Partijas kartokite tol, kol kažkuris žaidėjas pirmas surenks 222 arba daugiau taškų.
console.log('==========10==========');
let petrasCount = 0;
let kazysCount = 0;

let petrasTotal = 0;
let kazysTotal = 0;

while (petrasTotal < 222) {
    petrasTotal += rand(10, 20);
    petrasCount += 1;
}

while (kazysTotal < 222) {
    kazysTotal += rand(5, 25);
    kazysCount += 1;
}

if (petrasCount > kazysCount) {
    console.log(`Partija laimejo Petras surinkes: ${petrasTotal} taskus per ${petrasCount} kartu`);
} else if (kazysCount > petrasCount) {
    console.log(`Partija laimejo Kazys surinkes: ${kazysTotal} taskus per ${kazysCount} kartu`);
} else {
    console.log(`Lygybe, abu pasieke 222 taskus ar daugiau vienu metu, Petras surinko ${petrasTotal}, Kazys ${kazysTotal}`);
}

console.log(petrasCount);
console.log(kazysCount);


