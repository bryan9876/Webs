import React, { useState } from "react";

const Hocks = () => {
  // Declarar los estados iniciales y sus setters
  const [count, setCount] = useState(0);
  
  const inicial = "Sin reaccionar";
  const [like, setLike] = useState(inicial);

  // Función para alternar el estado de "like"
  const toggleLike = () => {
    setLike(like === inicial ? "Me gusta" : inicial);
  };

  return (
    <>
      <p>You clicked {count} times</p>
      <button onClick={() => setCount(count + 1)}>Click me</button>

      <p>Deja tu reaccion paps</p>
      <p>{like}</p>
      {/*ALTERNAR ENTRE EL ESTADO INICIAL Y EL ESTADO FINAL */}
      <button onClick={toggleLike}>
        {like === "Me gusta" ? "Quitar me gusta" : "Dar me gusta"}
      </button>
    </>
  );
};

export default Hocks;
