import React from "react";

const principal = () => {

    const user = {
        nombre: 'Bryan Alejandro',
        apellidoP: 'Martinez',
        apellidoM: 'Lopez',
        carrera: 'Ing. Sistemas Computacionales'
    };

    return (
      <>
          {/*imprimir datos de un objeto.*/}
          <h1>HOLA CHAVALES</h1>
          <h1>{user.nombre}</h1>
          <h4>{user.apellidoP}</h4>
      </>
    )
  }
  
  export default principal