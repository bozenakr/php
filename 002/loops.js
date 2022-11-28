// 1.	Sukurkite tris kintamuosius ir priskirkite jiems skirtingus sveikus skaičius iš intervalo 5…25;
// A.Paskaičiuokite jų sumą ir priskirkite ją kintamajam.Pasinaudokite console.log atspauzdinkite sumos kintamąjį;
// B.Sudėkite skaičius į stringo tipo kintamąjį ir jį atspauszdinkite pasinaudodami console.log;
// C.Sudėkite skaičius į stringo tipo kintamąją padarant tarp skaičių tarpus ir jį atspauszdinkite pasinaudodami console.log;
// D.Sudėkite skaičius į stringo tipo kintamąją padarant tarp skaičių tarpus ir gale pridedėkite trijų skaičių sumą, paskaičiuotą A dalyje.Atspausdinkite gautą stringo tipo kintąmąjį pasinaudodami console.log;

const a = 5;
const b = 7;
const c = 9;

// A.
const suma = a + b + c;
console.log(suma);

//B.
const string = '579';
console.log(string);

// C.
const string2 = '5 + 7 + 9' + ' => ' + suma;
console.log(string2);

//D.
const string3 = 'a, b, c';
console.log(string3);

//2.	Sukurkite vieną kintamąjį, jam priskirkite skaičių (iš intervalo 5…10), kurį sugeneruoja funkcija rand(5, 10) ir jį atspauszdinkite pasinaudojus console.log;
// for (let i = 0; i < 100; i++) {
//     function randomSkaicius(min, max) {
//         min = 33;
//         max = 77;
//         return Math.floor(Math.random() * (max - min + 1) + min); // max inclusive min inclusive
//     }

