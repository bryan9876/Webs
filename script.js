const mensaje = document.getElementById("mensaje");
const boton = document.getElementById("boton-saludar");

const evento = () => {
    let textomensaje = "Hola desde el JavaScript ";
    mensaje.innerHTML = textomensaje;
};

boton.addEventListener("click", evento);
