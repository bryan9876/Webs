import React from "react";

//PROPS UNICOS
//TENEMOS QUE PASAR COMO PARAMETRO LA VARIABLE PROPS PARA QUE RECIVA LOS VALORES
//const Props = (props) => {

    //return (
      //<>

      //<button type="button">PROPS UNICO</button>
        //{/*
        //ASI SE DECLARA UN PROPS
        //ESTOS DAN DIFERENTES VALORES A UN COMPONENTE.
        //name ES EL IDENTIFICADOR QUE SE UTUILIZARA PARA DARLE VALORES AL RENDERISARLO
        //*/}
        //<h1>Nombre: {props.name}</h1>

        {/*LOS PROPS LE DAN UN VALOR AL IDENTIFICADOR TANTAS VECES SEAN NECESARIAS*/}

      //</>
    //)
  //}
  
  //export default Props

  //PROPS DE MULTIPLES VALORES
  const Props = ({firstName, lastName}) => {

    return (
      <>
        <h1>{firstName} {lastName}</h1>    
      </>
    )
  }
  
  export default Props