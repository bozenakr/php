
//dvieju skaiciu suma===========================================================================
//parametrai a, b
//argumentai 2, 5

// function suma(a, b) { -- a ir b PARAMETRAI
//     return a + b;
// }
// const x = suma(2, 5); -- 2 ir 5 argumentai
// // console.log(x);

//JS Functions +
// 1. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra atspausdinamas su console.log;
console.log('==========1==========')
function text(x) {
    return x;
}
console.log(text('labas'));

const printIt = (text) => console.log(text);

printIt('ate');


//===============================================================================================
// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas atspausdinamas su console.log, o antrasis kiek kartų spausdinimas atliekamas. Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
const multiPrint = (text, number) => {
    for (let i = 0; i < number; i++) {
        console.log(text)
    }
};

multiPrint("Text example for multiprint", 5);

//===============================================================================================
// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
console.log('==========4==========')
function beLiekanos(x) {
    let skaicius = 0;
    for (let i = 2; i < x; i++) {
        if (x % i === 0) {
            skaicius++;
        }
    } return skaicius;
}
console.log(beLiekanos());

//5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkcija.
console.log('==========5==========')
let arrayFrom33To77 = [];

for (let i = 0; i < 100; i++) {
    function randomSkaicius(min, max) {
        return Math.floor(Math.random() * (77 - 33 + 1) + 33); // max inclusive min inclusive
    }
    // console.log(randomSkaicius(), 'Random skaicius');
    arrayFrom33To77.push(randomSkaicius());
}
console.log(arrayFrom33To77);

arrayFrom33To77.sort((a, b) => beLiekanos(b) - beLiekanos(a));
console.log(arrayFrom33To77);


// //6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
console.log('==========6==========')
let arrayFrom333To777 = [];

for (let i = 0; i < 100; i++) {
    function randomSkaicius(min, max) {
        return Math.floor(Math.random() * (777 - 333 + 1) + 333); // The maximum is inclusive and the minimum is inclusive
    }
    // console.log(randomSkaicius(), 'Random skaicius');
    arrayFrom333To777.push(randomSkaicius());
}
console.log();

let arrayFrom333To777BePirminiu = arrayFrom333To777.filter(num => beLiekanos(num) !== 0);

console.log(arrayFrom333To777BePirminiu);


// 7.	Sugeneruokite atsitiktinio(nuo 10 iki 20) ilgio ¬masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas.Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų.Paskutinio masyvo paskutinis elementas yra lygus 0;
console.log('==========7==========')
let outerArray = [];

const rand = (a, b) => Math.floor(Math.random() * (b - a + 1) + a);

const times = rand(10, 30);

function getRandomArray() {
    for (let i = 0; i < times; i++) {
        let randomArray = [];
        const len = rand(10, 20);
        console.log(len);

        for (let i = 0; i < len - 1; i++) {
            randomArray.push(rand(0, 10));
        }

        outerArray.push(randomArray);

    }
    return outerArray;

}

console.log(getRandomArray());

// 8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.Skaičiuoti reikia visuose masyvuose ir submasyvuose.
// 9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą - atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą.Kartokite, kol sąlyga nereikalaus pridėti elemento.
// 10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo(ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių(nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 
