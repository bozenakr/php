// 5.	Sukurti komponentą, kuris gauna tris props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage, o trečias yra spalva, kuria nudažomi abu tekstai.

function TrysProps ({vardas, amzius, spalva}) {
    return (
        <>
        <h1 style={{color: spalva}}>{vardas}</h1>
        <h2 style={{color: spalva}}>{amzius}</h2>
        </>
    )
}

export default TrysProps;