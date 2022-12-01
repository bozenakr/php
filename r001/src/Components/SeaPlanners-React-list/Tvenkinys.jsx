import Daiktas from '../SeaPlanners-React-list/Daiktas';

function Tvenkinys({ seaPlaners }) {
    return (
        <>
            <Daiktas show={0} seaPlaners={seaPlaners} />
            <Daiktas show={1} seaPlaners={seaPlaners} />
        </>
    );
}

export default Tvenkinys;
