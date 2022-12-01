import './App.scss';
import Labas from './Components/Labas';
import Props1 from './Components/Props1';
import rand from './Functions/rand';
import ColorTernary from './Components/ColorTernary';
import DuTagai from './Components/DuTagai';
import TrysProps from './Components/TrysProps';

//REACT BASE
// 1.	Sukurti komponentą, kuris užrašytų “LABAS, ZUIKI!”. Raidžių spalva pink. Spalva tekstui nurodoma komponento viduje naudojant style. Labas

// 2.	Sukurti komponentą, kuris gauną vieną props. Props yra bet koks tekstas, kuris komponente atvaizduojamas h1 tage. Props1

// 3.	Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai. ColorTernary

// 4.	Sukurti komponentą, kuris gauna du props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage. DuTagai

// 5.	Sukurti komponentą, kuris gauna tris props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage, o trečias yra spalva, kuria nudažomi abu tekstai. TrysProps

function App() {
    return (
        <div className="App">
            <header className="App-header">
                <Labas />
                <Props1 manospalva={'skyblue'} />
                <ColorTernary
                    spalva12={rand(1, 2) === 1 ? 'skyblue' : 'crimson'}
                />
                <DuTagai
                    pirmas="pirmas props tagas"
                    antras="antras props tagas"
                />
                <TrysProps vardas="Petras" amzius="35" spalva="green" />
            </header>
        </div>
    );
}

export default App;
