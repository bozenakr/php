import './App.scss';
import { useState } from 'react';

// REACT BASE LIST

//keturi mygtukai ADD REMOVE i kaire i desine
//add atsiranda pagaliukas paspaudzia dar karta atsiranda dar pagaliukas pasuktas 10 laipsniu trecias pagaliukas 20 laipsniu - pagaliukai masyve
//remove - istrina paskutini pagaliuka
//i kaire visi pagaliukai 10 laipsniu i kaire
//i desine visi pagaliukai 10 laipsniu i desine
//length -1 * 10deg

function App() {
    const [line, setLine] = useState([]);
    const [ro, setRo] = useState(true);

    const add = () => {
        setLine((s) => [
            ...s,
            {
                // transform: 'rotate(10deg)',
            },
        ]);
    };

    const remove = () => {
        setLine((s) => []);
    };

    // const kaire = () => {
    //     setRo;
    // };
    return (
        <div className="App">
            <div className="App-header">
                <div className="bin">
                    {line.map((what, i) => (
                        <div
                            key={i}
                            className="pagaliukas"
                            style={{ transform: ro ? null : 'rotate(10deg)' }}
                        ></div>
                    ))}
                    {/* what tai naujo(tuscio) masyvo 0 elementas, permeta per => sukuria div su backgroundColor what.color - tai yra su color 'crimson' arba 'blue' */}
                </div>
                <div>
                    <button onClick={add}>ADD</button>
                    <button onClick={remove}>REMOVE</button>
                    <button onClick={() => setRo(true)}>kaire</button>
                    <button onClick={() => setRo(false)}>desine</button>
                </div>
            </div>
        </div>
    );
}

export default App;
