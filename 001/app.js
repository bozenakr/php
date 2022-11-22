//PHP uzduotis-testas
// masyvas 10 elementu atsitiktiniai nuo 1 iki 11 kiekviena karta sugeneruoja naujus atsitiktinius skaicius

//===========1 sprendimas==========
let masyvas = [];

for (let i = 0; i < 12; i++) {
    masyvas.push(Math.floor(Math.random() * 11) + 1)
}
console.log(masyvas);

//========2 sprendimas=============
// function random(min, max) {
//     min = Math.ceil(min);
//     max = Math.floor(max);
//     return Math.floor(Math.random() * (max - min + 1) + min);
// }
// const masyvas = [...Array(10)].map(() => random(1, 11));

// console.log(masyvas);

