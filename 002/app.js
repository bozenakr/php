// let a = 5;
// let b = 'Jonas';
// let c = true;

// console.log(typeof a, typeof b, typeof c);

// let d = a;
// console.log(a, d);
// a++;
// console.log(a, d);

//========namas nespausdina push bet jau ji mato consoleje - realiai turiu 2 namus su push

// const namas = ['Jonas', 'Zita', 'Bebras'];
// console.log(namas);
// console.log(typeof namas);

// const namas2 = namas;
// namas.push('Valatka');
// console.log(namas, namas2);

// /=====pasidarau 2 skirtingus namus - pirma be push ir antra su push

// const home = ['a', 'b', 'c'];
// const home2 = [...home];
// home.push('d');
// console.log(home, home2); //(4) ['a', 'b', 'c', 'd'] (3) ['a', 'b', 'c']

// =====push unshift


const array = ['liutas', 'pingvinas'];
// array.push('a', 'b');
// array.unshift('z', 'v');
// console.log(array); //(6) ['z', 'v', 'liutas', 'pingvinas', 'a', 'b']

array.shift();
console.log(array);







