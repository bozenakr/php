import { useState } from 'react';
import './App.scss';
import rand from './Functions/rand';
import randColor from './Functions/randColor'

//1.	Sukurti aplikaciją, kuri turi mygtuką change ir atvaizduoja apskritimą. Paspaudus mygtuką change apskritimas turi pavirsti į kvadratą, o paspaudus dar kartą vėl pavirsti apskritimu.
//??????????sukurtos form .circle .square?????????????
// function App() {

//  const [form, setform] = useState(true);

//   const change = () => {
//     setform(form => !form);
//   }

//   return (
//     <div className="App">
//       <header className="App-header">
//         {/* <div className={{form: form ? "square" : "circle"}}></div> */} ??????neveikia ant clasName?????
//         <div style={{width: '200px', height: '200px', backgroundColor: 'aquamarine', 'borderRadius': form ? '0' : '50%'}}></div>
//    <button onClick={change}>Change</button>
//       </header>
//     </div>
//   );
// }

// export default App;

//2.	Sukurti aplikaciją, kuri turi mygtukus change ir random bei atvaizduoja apskritimą su random skaičiumi viduje. Paspaudus change mygtuką apskritimas keičiasi į stačiakampį kaip pirmame uždavinyje, o paspaudus random mygtuką, skaičius pasikeičia į rand 5 - 25

// function App() {
//     const [form, setform] = useState(true);
//     const [number, setNumber] = useState(rand(5, 25));

//     const change = () => {
//         setform((form) => !form);
//     };

//     const randomNr = () => {
//         const random = rand(5, 25);
//         setNumber(random);
//     };

//     return (
//         <div className="App">
//             <header className="App-header">
//               <div className="form" style={{
//               borderRadius: form ? '0' : '50%'}}>
//               {number}</div>
//               <div>
//               <button onClick={change}>Change</button>
//               <button onClick={randomNr}>Random</button>
//               </div>
//             </header>
//         </div>
//     );
// }

// export default App;


//3.	Sukurti aplikaciją, kuri turi mygtukus plus ir minus, bei atvaizduoja skaičių 0. Paspaudus plus mygtuką, skaičius padidėja 1, o paspaudus minus- sumažėja 3

//   function App() {
//   const [number, setNumber] = useState(0);
  
  
//   const plus = () => {
//     setNumber(c => c + 1);
//   }

//   const minus = () => {
//     setNumber(c => c - 3);    
//   }

//   return (
//     <div className="App">
//       <div className="App-header">
//         <h1>{number}</h1>
//         <div>
//         <button onClick={plus}>Plus</button>
//         <button onClick={minus}>Minus</button>
//         </div>
//       </div>
//     </div>
//   );
// }

// export default App;

//4.	Sukurti aplikaciją, kuri turi mygtuką add, kurį paspaudus vieną kartą atsiranda mėlynas kvadratas, paspaudus dar kartą- dar vienas ir t.t.

//   function App() {
//   const [sq, setSq] = useState([]);
  
  
//     const add = () => {
//         setSq(s => [...s, 
//             {
//             color: 'blue'
//             }
//         ]);
//     }

//     return (
//         <div className="App">
//             <div className="App-header">
//             <div className="bin">
//                 {sq.map((what, i) => <div key={i} className="sq"style={{backgroundColor: what.color}}></div>)}
//             </div>
//                 <button onClick={add}>ADD</button>
//             </div>
//         </div>
//     );
// }

// export default App;

//5.	Sukurti aplikaciją, kuri turi mygtukus add red, add blue ir reset. Paspaudus add red, prisideda raudonas kvadratas, paspaudus add blue - mėlynas ir t.t. Spaudinėjant prisideda vis daygiau kvadratų. Paspaudus reset viskas išsitrina

//   function App() {
//   const [sq, setSq] = useState([]);
  
  
//     const addRed = () => {
//         setSq(s => [...s, 
//             {
//             color: 'crimson'
//             }]);
//     }

//     const addBlue = () => {
//       setSq(s => [...s, {
//         color: 'blue'
//       }])
//     }

//     const reset = () => {
//       setSq(s => [])
//     }


//     return (
//         <div className="App">
//             <div className="App-header">
//             <div className="bin">
//                 {sq.map((what, i) => <div key={i} className="sq" style={{backgroundColor: what.color}}></div>)}
//                     {/* what tai naujo(tuscio) masyvo 0 elementas, permeta per => sukuria div su backgroundColor what.color - tai yra su color 'crimson' arba 'blue' */}
//             </div>
//             <div>
//                 <button onClick={addRed}>Add red</button>
//                 <button onClick={addBlue}>Add blue</button>
//                 <button onClick={reset}>Reset</button>
//             </div>
//             </div>
//         </div>
//     );
// }

// export default App;

//6. test 
// paspaudi viena mygtuka vertikalus - paspaudi antra mygtuka horizontalus


// function App() {

//     const [ro, setRo] = useState(true);

//     return (
//         <div className="App">
//             <div className="App-header">
//                 <div className="kv" style={{
//                     transform: ro ? null : 'rotate(90deg)'
//                 }}></div>
//                 <div>
//                 <button onClick={() => setRo(true)}>GO</button>
//                 <button onClick={() => setRo(false)} style={{transform: 'rotate(90deg)'}}>GO</button>
//                 </div>
//             </div>
            
//         </div>
//     );
// }

// export default App;