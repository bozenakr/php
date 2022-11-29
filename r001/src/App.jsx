import { useState } from 'react';
import './App.scss';
import rand from './Functions/rand';

//1.	Sukurti aplikaciją, kuri turi mygtuką change ir atvaizduoja apskritimą. Paspaudus mygtuką change apskritimas turi pavirsti į kvadratą, o paspaudus dar kartą vėl pavirsti apskritimu.
//??????????sukurtos klase .circle .square?????????????
// function App() {

//  const [klase, setKlase] = useState(true);

//   const change = () => {
//     setKlase(klase => !klase);
//   }

//   return (
//     <div className="App">
//       <header className="App-header">
//         {/* <div className={{klase: klase ? "square" : "circle"}}></div> */} ??????neveikia ant clasName?????
//         <div style={{width: '200px', height: '200px', backgroundColor: 'aquamarine', 'borderRadius': klase ? '0' : '50%'}}></div>
//    <button onClick={change}>Change</button>
//       </header>
//     </div>
//   );
// }

// export default App;

//2.	Sukurti aplikaciją, kuri turi mygtukus change ir random bei atvaizduoja apskritimą su random skaičiumi viduje. Paspaudus change mygtuką apskritimas keičiasi į stačiakampį kaip pirmame uždavinyje, o paspaudus random mygtuką, skaičius pasikeičia į rand 5 - 25

// function App() {
//     const [klase, setKlase] = useState(true);
//     const [number, setNumber] = useState(rand(5, 25));

//     const change = () => {
//         setKlase((klase) => !klase);
//     };

//     const randomNr = () => {
//         const random = rand(5, 25);
//         setNumber(random);
//     };

//     return (
//         <div className="App">
//             <header className="App-header">
//               <div
//               style={{
//               borderRadius: klase ? '0' : '50%',
//               width: '200px',
//               height: '200px',
//               backgroundColor: 'aquamarine',
//               fontSize: '50px',
//               display: 'flex',
//               justifyContent: 'center',
//               alignItems: 'center',
//               color: 'crimson'}}>
//               {number}</div>
//               <button onClick={change}>Change</button>
//               <button onClick={randomNr}>Random</button>
//             </header>
//         </div>
//     );
// }

// export default App;


//3.	Sukurti aplikaciją, kuri turi mygtukus plus ir minus, bei atvaizduoja skaičių 0. Paspaudus plus mygtuką, skaičius padidėja 1, o paspaudus minus- sumažėja 3

  function App() {
  const [number, setNumber] = useState(0);
  
  
  const plus = () => {
    setNumber(c => c + 1);
  }

  const minus = () => {
    setNumber(c => c - 3);    
  }

  return (
    <div className="App">
      <div className="App-header">
        <h1>{number}</h1>
        <div>
        <button onClick={plus}>Plus</button>
        <button onClick={minus}>Minus</button>
        </div>
      </div>
    </div>
  );
}

export default App;

//4.	Sukurti aplikaciją, kuri turi mygtuką add, kurį paspaudus vieną kartą atsiranda mėlynas kvadratas, paspaudus dar kartą- dar vienas ir t.t.

//5.	Sukurti aplikaciją, kuri turi mygtukus add red, add blue ir reset. Paspaudus add red, prisideda raudonas kvadratas, paspaudus add blue - mėlynas ir t.t. Spaudinėjant prisideda vis daygiau kvadratų. Paspaudus reset viskas išsitrina