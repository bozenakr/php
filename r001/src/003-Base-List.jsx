import './App.scss';

// REACT BASE LIST
// const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

// 1.	Atvaizduoti masyvą dogs. Kiekvienas šuo atskirame kvadrate.

// const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
// function App() {

//     return (
//         <div className="App">
//             <div className="App-header" style={{flexDirection: 'row'}}>
//                     {dogs.map((dog, i) => <div key ={i} className='square'>{dog}</div>)}
//             </div>
//             </div>
//     );
// }

// export default App;

//2.	Atvaizduoti masyvą dogs. Kiekvienas šuo atskirame apskritime. Šunys turi būti išrūšiuoti nuo ilgiausio žodžio iki trumpiausio, o apskritimai sunumeruoti nuo 1 iki galo.

// console.clear();
// const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

// dogs.sort((a, b) => b.length - a.length);

// function App() {
//     return (
//         <div className="App">
//             <div className="App-header" style={{flexDirection: 'row'}}>
//                     {dogs.map((dog, i) => <div key ={i} className='circle'>{i + 1}<br></br>{dog}</div>)}
//             </div>
//             </div>
//     );
// }

// export default App;

//3.	Atvaizduoti masyvą dogs. Poriniuose indeksuose esančius šunis atvaizduoti kvadratuose, neporinius apskritime.

// console.clear();
// const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

// function App() {
//     return (
//         <div className="App">
//             <div className="App-header" style={{ flexDirection: 'row' }}>
//                 {dogs.map((dog, i) => (
//                     <div
//                         className="shape"
//                         style={{
//                             borderRadius: (i + 1) % 2 === 0 ? '0' : '50%',
//                         }}
//                         key={i}
//                     >
//                         {i + 1}
//                         <br></br>
//                         {dog}
//                     </div>
//                 ))}
//             </div>
//         </div>
//     );
// }

// export default App;

//4.	Atvaizduoti masyvą dogs. Šunis, kurie prasideda didžiąja raide praleisti (neatvaizduoti).
//????????=========Be lietuvisku raidziu=========??????????

// console.clear();
// const dogs = ['suo', 'sunius', 'Bobikas', 'kudlius', 'Sarikas', 'avigalvis'];

// const dogsBeDidziuju = dogs.filter((what) => what >= 'a' && what <= 'z');
// console.log(dogsBeDidziuju);

// function App() {
//     return (
//         <div className="App">
//             <div className="App-header" style={{ flexDirection: 'row' }}>
//                 {dogsBeDidziuju.map((dog, i) => (
//                     <div className="shape" style={{}} key={i}>
//                         {i + 1}
//                         <br></br>
//                         {dog}
//                     </div>
//                 ))}
//             </div>
//         </div>
//     );
// }

// export default App;

//5.	Naudojant masyvą dogs atvaizduoti skaičius, kurie yra lygūs žodžių masyve ilgiui. Skaičius, didesnius nei 6 atvaizduoti žaliai, kitus raudonai.

console.clear();
const dogs = ['suo', 'sunius', 'Bobikas', 'kudlius', 'Sarikas', 'avigalvis'];
console.log(dogs);
function App() {
    return (
        <div className="App">
            <div className="App-header" style={{ flexDirection: 'row' }}>
                {dogs.map((dog, i) => (
                    <div
                        className="shape"
                        style={{ color: dog.length > 6 ? 'green' : 'crimson' }}
                        key={i}
                    >
                        {dog.length}
                    </div>
                ))}
            </div>
        </div>
    );
}

export default App;
