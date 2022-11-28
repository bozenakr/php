import './App.css';
import Valio from './Components/Valio';
import random from './Functions/random';

function App() {
  return (
    <div className="App">
      <header className="App-header" style={{
        color: random(0, 1) ? 'crimson' : 'skyblue',
        letterSpacing: '18px'
        }}>
      <Valio/>
      <div>{ random(1, 7) }</div>
      </header>
    </div>
  );
}

export default App;
