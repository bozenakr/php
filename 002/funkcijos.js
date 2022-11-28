
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
console.log(text('`labas`'));

//===============================================================================================
// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas atspausdinamas su console.log, o antrasis kiek kartų spausdinimas atliekamas. Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
// console.log('==========2==========')
// let kiekKartuKviesta = 0;
// function duArgumentai(x, y) {
//     kiekKartuKviesta += 1;
//     return text, kiekKartuKviesta;
// }
// console.log(duArgumentai());

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
console.log(beLiekanos(8));

//5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkcija.
console.log('==========5==========')
let arrayFrom33To77 = [];

for (let i = 0; i < 100; i++) {
    function randomSkaicius(min, max) {
        min = 33;
        max = 77;
        return Math.floor(Math.random() * (max - min + 1) + min); // max inclusive min inclusive
    }
    // console.log(randomSkaicius(), 'Random skaicius');
    arrayFrom33To77.push(randomSkaicius());
}
console.log(arrayFrom33To77);




// //6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
// console.log('==========6==========')
// let arrayFrom333To777 = [];

// for (let i = 0; i < 100; i++) {
//     function randomSkaicius(min, max) {
//         min = 333;
//         max = 777;
//         return Math.floor(Math.random() * (max - min + 1) + min); // The maximum is inclusive and the minimum is inclusive
//     }
//     // console.log(randomSkaicius(), 'Random skaicius');
//     arrayFrom333To777.push(randomSkaicius());
// }
// console.log(arrayFrom333To777);
