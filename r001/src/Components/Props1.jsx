// 2.	Sukurti komponentą, kuris gauną vieną props. Props yra bet koks tekstas, kuris komponente atvaizduojamas h1 tage.

function Props1 ({manospalva}) {
    return (
    <>
    <h1 style={{color: manospalva}}>Componentas su 1 props - mano spalva</h1>   
    </>
    )
}

export default Props1;