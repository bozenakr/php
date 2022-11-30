import { useState } from 'react';
import './App.scss';

function App() {
    const [form, setform] = useState(true);

    const change = () => {
        setform((form) => !form);
    };

    return (
        <div className="App">
            <header className="App-header">
                {/* <div className={{form: form ? "square" : "circle"}}></div> */}{' '}
                <div
                    style={{
                        width: '200px',
                        height: '200px',
                        backgroundColor: 'aquamarine',
                        borderRadius: form ? '0' : '50%',
                    }}
                ></div>
                <button onClick={change}>Change</button>
            </header>
        </div>
    );
}

export default App;
