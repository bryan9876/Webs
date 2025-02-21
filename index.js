const express = require("express");
const cors = require("cors");
//guardamos entre llaves
const {users} = require("./data");
const PORT = 8080;

//Crear la instancia de nuestro servidor
const app = express();
app.use(cors());
app.use(express.json());

app.get("/prueba", (req, res) => {
    //res.send("Hola mundo");
    res.json({mensaje:"Hola desde un json"});
});

app.get("/users", (req, res) => {
    res.json(users);
});

app.post("/login", (req, res) => {
    const {name, password} = req.body;
    const user = users.find(
        (usr) => usr.name == name &&
                 ust.password == password
        );
    if (user) {
        res.status(200).json({token:`token-falso-${user.id}`});
    }else{
        res.status(401).json({error:"Usuario no valido"});
    }
});

//Middleware
const valiarToken = (req, res, next) => {
    //const {token} = req.body;
    const token = req.headers.authorization;

    if (token) {
        //Si nos permite entrar o nel
        if(token.startsWith("token-falso-")) next();
        res.status(403).json({mensaje:"Acceso denegado, token invalido"});

    }else{
        res.status(403).json({mensaje:"Acceso denegado, no hay token"})
    }
} 

app.get("/saludo-protegido", valiarToken, (req, res) => {
    res.json({mensaje:"Saludo protegido"});
})

app.listen(PORT, () => {
    console.log("Server running in http://localhost:"+PORT);
});