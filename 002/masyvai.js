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
console.log('=sukurti 2 masyvai=');
const walletMonetos = wallet.filter(what => what <= 2);
console.log(walletMonetos);
const walletBanknotai = wallet.filter(what => what > 2);
console.log(walletBanknotai);

//9.	Sukurti masyvą (piniginę su dviem skyreliais) iš dviejų elementų, kurio pirmas elementas būtų masyvas iš 8 uždavinio su monetom, o antras elementas masyvas iš 8 uždavinio su popieriniais pinigais;
console.log('==========9==========')
const arrayFrom2Arrays = [];
console.log(arrayFrom2Arrays);

arrayFrom2Arrays.push(walletMonetos, walletBanknotai);
console.log(arrayFrom2Arrays);

//10.	Į 9 uždavinio masyvą, piniginę su dviem skyreliais, pridėti trečią skyrelį- masyvą su kortelėm: ['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI'];

console.log('==========10==========')
const wallet3Skyreliai = [];
const walletKorteles = ['KIKA', 'Euro Vaistinė', 'Drogas', 'Ačiū', 'Lietuvos Geležinkeliai', 'Mano RIMI'];

wallet3Skyreliai.push(walletMonetos, walletBanknotai, walletKorteles);
console.log(wallet3Skyreliai);

//11.	Korteles skyrelyje sudėlioti (išrūšiuoti) pagal abėcėlę;
console.log('==========11==========')

//====sort=====
console.log('==sort==')
walletKorteles.sort();
console.log(wallet3Skyreliai);

//====localeCompare====
// console.log('==localeCompare==');
// walletKorteles.sort((a) => a[0].localeCompare(a[1]));
// console.log(arrayFrom3Arrays);

//12.	Į kortelių skyrelį pridėti mokėjimo kortelių 'MasterCard', 'Visa' (su rand generuokite atsitiktines reikšmes 'MasterCard' arba 'Visa' ir rašykite į masyvą) iš skirtingų bankų tiek, kad skyrelis (masyvo ilgis) pasidarytų lygus 20;

console.log('==========12==========')
//pirma susikuriu masyvo kopija
//paleidziu cikla nuo mano turimo masyvo ilgio iki norimo masyvo ilgio (20)
//sukuriu nauja masyva su stringais - is ju rinksiu random indexa
//pasirenku random index of masyvas su variantais ir priskiriu jam reiksme array[i]
//supushinu i masyva mano random reiksmes
//
const walletKorteles20 = [...walletKorteles];

for (let i = walletKorteles20.length; i < 20; i++) {
    const VisaOrMastercard = ['Visa', 'Mastercard'];
    const randomKortelesIndex = Math.floor((Math.random() * VisaOrMastercard.length));
    const randomKortele = VisaOrMastercard[randomKortelesIndex];
    walletKorteles20.push(randomKortele);
}
console.log(walletKorteles20);

//13.	Paskaičiuokite, kokio tipo kortelių ('MasterCard' arba 'Visa') yra daugiau;
console.log('==========13==========')

const kiekVisa = walletKorteles20.filter(what => what === 'Visa').length;
console.log(kiekVisa, 'kiek yra Visa');

const kiekMastercard = walletKorteles20.filter(what => what === 'Mastercard').length;
console.log(kiekMastercard, 'kiek yra Mastercard');


//14.	Sukurkite masyve (piniginėje) ketvirtą elementą (skyrelį) į kurį įdėkite 10 loterijos bilietų, kurių numerius sugeneruokite atsitiktinai su rand funkcija nuo 1000000000 iki 9999999999;
console.log('==========14==========')
const walletLoterija = [];

for (let i = 0; i < 10; i++) {
    function randomLoterijosBilietas(min, max) {
        min = 1000000000;
        max = 9999999999;
        return Math.floor(Math.random() * (max - min + 1) + min); // The maximum is inclusive and the minimum is inclusive
    }
    console.log(randomLoterijosBilietas(), 'Loterijos bilietas');
    walletLoterija.push(randomLoterijosBilietas());

}
console.log(walletLoterija);

//15.	Loterijos bilietų masyvą išrūšiuoti nuo didžiausio numerio iki mažiausio;
console.log('==========15==========')
walletLoterija.sort((a, b) => b - a);
console.log(walletLoterija);

//16.	Į piniginės popierinių pinigų skyrelį įdėti 500 pinigų mažom kupiūrom ( generuoti atsitiktinius skaičius nuo 3 iki 10 ir dėti kaip naujus elementus, kol įdėta suma bus lygi 500);
console.clear();
console.log('==========16==========')
const walletBanknotaiKolSuma500 = [...walletBanknotai];
console.log(walletBanknotaiKolSuma500);

let banknotuSuma = 0;
for (let i = 0; i < walletBanknotaiKolSuma500.length; i++) {
    banknotuSuma += walletBanknotaiKolSuma500[i];
}
console.log(banknotuSuma, 'Banknotu suma');

let randomBanknotas = 0;
for (let i = walletBanknotaiKolSuma500.length; i < banknotuSuma; i++) {
    function randomBanknotas(min, max) {
        min = 3;
        max = 10;
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    // walletBanknotaiKolSuma500.push(randomBanknotas());
}


// let skaicius = 0;
// for (let i = 0; i < wallet.length; i++) {
//     if (wallet[i] === max) {
//         skaicius++;
//     }
// }
// return skaicius;
// };

// 17.	Patikrinti ar ką nors laimėjote.Bilieto numerius dalinkite iš 777 ir jeigu numeris išsidalins be liekanos - jūs laimėjote! Suskaičiuokite, kiek buvo laimingų bilietų.
console.log('==========17==========')

const laimingiBilietai = walletLoterija.filter(what => what % 5 === 0);
console.log(laimingiBilietai);

const kiekLaiminguBilietu = laimingiBilietai.length;
console.log(kiekLaiminguBilietu);


//18.	 Sukurkite penktą skyrelį ir į jį sudėkite nuotraukas: ['šuo', 'katė', 'automobilis', 'namas', 'kiemas'] ir jas išrūšiuokite pagal žodžių ilgį taip, kad pirma eitų trumpiausi žodžiai;
console.log('==========18==========')

const walletNuotraukos = ['šuo', 'katė', 'automobilis', 'namas', 'kiemas'];
walletNuotraukos.sort((a, b) => a.length - b.length);
console.log(walletNuotraukos);
