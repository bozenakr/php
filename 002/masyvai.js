// 1.	Sukurti masyvą(piniginę), kurio ilgis yra atsitiktinis nuo 10 iki 30, o reikšmės atsitiktiniai skaičiai nuo 0 iki 10(pinigai);
//sukurti masyva
//a. gauti random skaiciu nuo 10 iki 30
//supushinti i masyva

let wallet = [];
const masyvoIlgis = Math.floor(Math.floor(Math.random() * (31 - 10) + 10));

for (let i = 0; i < masyvoIlgis; i++) {
    wallet.push(Math.floor(Math.random() * 11))
}
console.log(wallet);



// 2.	Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio reikšmių(pinigų esančių piniginėje) sumą;

let sumaAll = 0;
for (let i = 0; i < wallet.length; i++) {
    sumaAll += wallet[i];
}
console.log(sumaAll);

// 3.	Naudojant ciklą apskaičiuoti masyvo iš 1 uždavinio popierinių pinigų(skaičių didesnių už 2) reikšmių sumą;
console.log('==========3==========')
let sumaDidesniUzDu = 0;
for (let i = 0; i < wallet.length; i++) {
    if (wallet[i] > 2) {
        sumaDidesniUzDu += wallet[i];
    }
}
console.log(sumaDidesniUzDu);


//4.	Išleisti visus metalinius pinigus (reikšmes, kurios yra mažesnės arba lygios 2 padaryti lygias 0) iš 1 uždavinio;

console.log('==========4==========')
const beMetaliniu = [...wallet];
for (let i = 0; i < wallet.length; i++) {
    if (wallet[i] <= 2) {
        wallet[i] = 0;
    }
}
console.log(beMetaliniu);


//5.	Surasti didžiausią reikšmę 1 uždavinio masyve ir paskaičiuoti kiek tokių didžiausių reikšmių masyve yra;

console.log('==========5==========')
console.log(wallet);
const max = Math.max(...wallet);
console.log(max, 'max reiksme');

//=====sprendimas su FOR LOOP========
const kiekYraMax = () => {
    let skaicius = 0;
    for (let i = 0; i < wallet.length; i++) {
        if (wallet[i] === max) {
            skaicius++;
        }
    }
    return skaicius;
};
console.log(kiekYraMax(), 'kiek yra max FOR LOOP');

//=====sprendimas su FILTER========
const filter = wallet.filter(what => what === max).length;
console.log(filter, 'kiek yra max FILTER');


//6.	Visus masyvo elementus, kurie yra lygūs 0, pakeisti į tų elementų indeksų (vietų, numerių) reikšmes;
console.log('==========6==========')

// const index = wallet.indexOf(0);
// console.log(index);

const newWallet = wallet.map((what, a) => {
    if (what === 0) {
        return a;
    }
    return what;
})
console.log(newWallet);

console.log('========= 6 ternary =========');
//viena linija=============
const newWallet2 = wallet.map((what, a) => what === 0 ? a : what)
console.log(newWallet2);

//7.	Į 1 uždavinio masyvą pridėti tiek naujų reikšmių (pinigų, atsitiktinių skaičių nuo 0 iki 10), kad masyvo ilgis būtų lygiai 30;
console.log('==========7==========')
const wallet30 = [...wallet];
for (let i = wallet30.length; i < 30; i++) {
    wallet30.push(Math.floor(Math.random() * 11))
}
console.log(wallet30);

//8.	Naudojant 1 uždavinio masyvą iš jo reikšmių sukurti dar du papildomus masyvus. Į vieną iš 1 uždavinio masyvo pridėti reikšmes mažesnes arba lygias 2 (monetas), o į kitą didesnes nei 2 (popierinius pinigus);
console.log('==========8==========')
console.log(wallet);
console.log('===sukurti 2 masyvai===');
const wallet1 = wallet.filter(what => what <= 2);
console.log(wallet1);
const wallet2 = wallet.filter(what => what > 2);
console.log(wallet2);

//9.	Sukurti masyvą (piniginę su dviem skyreliais) iš dviejų elementų, kurio pirmas elementas būtų masyvas iš 8 uždavinio su monetom, o antras elementas masyvas iš 8 uždavinio su popieriniais pinigais;


