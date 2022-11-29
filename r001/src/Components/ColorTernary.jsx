//3.	Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai.

function ColorTernary ({spalva12}) {
    return (
        <>
    <h1 style={{
        color: spalva12
        }}>Zebrai ir Bebrai Componentas su TERNARY melyna/raudona</h1>   
    </>
    )
}

export default ColorTernary;