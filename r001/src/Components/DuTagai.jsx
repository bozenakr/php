//4.	Sukurti komponentą, kuris gauna du props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage.

function DuTagai ({pirmas, antras}) {
        return (
        <>
        <h1>{pirmas}</h1>
        <h2>{antras}</h2>
    </>
    )
}

export default DuTagai;