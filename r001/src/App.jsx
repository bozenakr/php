import './App.scss';

// REACT BASE LIST
// 1.	Atvaizduoti masyvą dogs. Kiekvienas šuo atskirame kvadrate.

const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

function App() {
    return (
        <div className="App">
            <div className="App-header" style={{ flexDirection: 'row' }}>
                {dogs.map((dog, i) => (
                    <div key={i} className="square">
                        {dog}
                    </div>
                ))}
            </div>
        </div>
    );
}

export default App;
