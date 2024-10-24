import React from 'react';
import Principal from './components/Principal';
import Props from './components/Props';
import Hocks from './components/Hocks';
import Eventos from './components/Eventos';

function App() {
  return (
    <>
    <Principal/>

    {/*ADIGNANDO UN VALOR DIFERENTE A UN PROPS */}
    {/*
    <Props name = "Bryan Alejandro Martinez Lopez" />
    <Props name = "Nadia Lucero Martinez Lopez" />
    <Props name = "Kevin Yoan Calderon Garcia" />
    <Props name = "Misael Barbosa Arce" />
    */}

    {/*PROPS DE UN SOLO VALOR
    <Props name = "Bryan Alejandro"/>*/}

    {/*PROPS DE MULTIPLES VALORES */}
    <Props firstName={"Nombre: Misael"}/>
    <Props lastName={"Apellido: Barbosa Arce"}/>

    <Hocks/>
    <Eventos/>

    </>
  );
}

export default App;
