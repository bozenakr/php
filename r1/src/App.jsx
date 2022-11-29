import './App.css';

const m = [
    'Pilkis',
    'Pukis',
    'Rainis'
]
function App() {
  return (
    <div className="App">
      <div className="App-header">
        {m.map((cat, i) => <h2 key={i}>{cat}</h2>)}
      </div>
    </div>
  );
}

export default App;
