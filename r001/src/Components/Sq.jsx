// import { useEffect } from "react";

function Sq({square}) {


    // useEffect(() => {
    //     console.log('new', square.id);
    //     return () => {
    //         console.log('gone', square.id);
    //     }
    // }, []);

    // const destroy = () => {
    //     setSq(s => s.filter(oneSq => oneSq.id !== square.id));
    // }

    return (
        <div className="sq"style={{backgroundColor: square.color}} ></div>
        )
    }
    
    export default Sq;
    // onClick={destroy}>{square.id}