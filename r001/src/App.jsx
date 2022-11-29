import './App.css';
import Labas from './Components/Labas';
import Props1 from './Components/Props1';
import rand from './Functions/rand';
import ColorTernary from './Components/ColorTernary';
import DuTagai from './Components/DuTagai';
import TrysProps from './Components/TrysProps';

function App() {
  return (
    <div className="App">
      <header className="App-header">
<Labas/>
<Props1 manospalva={"skyblue"}/>
<ColorTernary spalva12={rand(1,2) ===1 ? 'skyblue' : 'crimson'}/>
<DuTagai pirmas="pirmas props tagas" antras="antras props tagas"/>
<TrysProps vardas="Petras" amzius="35" spalva='green'/>
      </header>
    </div>
  );
}

export default App;
