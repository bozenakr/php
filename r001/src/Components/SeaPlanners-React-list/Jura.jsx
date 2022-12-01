import Bala from '../SeaPlanners-React-list/Bala';
import Laivas from '../SeaPlanners-React-list/Laivas';
import Sala from '../SeaPlanners-React-list/Sala';
import Valtis from '../SeaPlanners-React-list/Valtis';

function Jura({ p }) {
    if (p.type === 'man') {
        return <Valtis p={p} />;
    }
    if (p.type === 'car') {
        return <Laivas p={p} />;
    }
    if (p.type === 'animal') {
        return <Sala p={p} />;
    }
    if (p.type === 'fish') {
        return <Bala p={p} />;
    }
}

export default Jura;
