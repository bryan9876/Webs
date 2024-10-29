<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="css/responsiv.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: url('img/fondo.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="content-grid">
        <div class="cont">
            <div class="head mb-5">
                <div class="navbar-normal">
                    <nav class="navbar navbar-dark bg-dark fixed-top">
                        <div class="container-fluid">
                            <img class="size-img" src="" alt="">
                            <p class="text-center fw-bold fs-4">EVENTOS KALIFORNIA</p>
                            <a class="navbar-brand text-end" href="index2.php"><i class="bi bi-house"></i>   Inicio</a>
                            <a class="navbar-brand text-end" href="mi-cuenta.php"><i class="bi bi-person-fill"></i>   Mi cuenta</a>
                            <a class="navbar-brand text-end" href="cerrar-sesion.php"><i class="bi bi-door-open"></i>   Cerrar Sesion</a>
                        </div>
                    </nav>
                </div>
                <div class="navbar-responsivo">
                    <nav class="navbar navbar-dark bg-dark fixed-top">
                        <div class="container-fluid">
                            <p class="text-center fw-bold fs-4">EVENTOS KALIFORNIA</p>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                        aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">EVENTOS KALIFORNIA</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active fw-bold" aria-current="page" href="index2.php">Inicio</a>
                                    <a class="nav-link active fw-bold" aria-current="page" href="mi-cuenta.php">Mi
                                    cuenta</a>
                                    <br>
                                    <p class="text-start">EVENTOS</p>
                                    <p><a href="consultar-eventos.php"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Consultar
                                    Evento</a></p>
                                    <p><a href="agregar-cliente.php"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Añadir
                                    Evento</a></p><br>
                                    <p class="text-start">CLIENTES</p>
                                    <p><a href="consultar-clientes.php"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Consultar
                                    Clientes</a></p><br>
                                    <p class="text-start">USUARIOS</p>
                                    <p><a href="consultar-usuarios.php"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Usuarios</a>
                                    </p><br>
                                    <p class="text-start">PAGOS</p>
                                    <p><a href="consultar-pagos.php"
                                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Consultar
                                    Pagos</a>
                                </p><br>
                            </li>
                            <a class="nav-link active" aria-current="page" href="cerrar-sesion.php">Cerrar Sesion</a>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>
<div class="cont border-end">
    <div class="p-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne"><i class="bi bi-calendar2-event">   EVENTOS</i>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p><a href="consultar-eventos.php"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-arrow-return-right">VER EVENTOS</i></a></p>
                    <p><a href="agregar-cliente.php"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-arrow-return-right">NUEVO EVENTO</i></a></p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
             data-bs-target="#flush-collapseTwo" aria-expanded="false"
             aria-controls="flush-collapseTwo"><i class="bi bi-person-circle">   CLIENTES</i>

         </button>
     </h2>
     <div id="flush-collapseTwo" class="accordion-collapse collapse"
     data-bs-parent="#accordionFlushExample">
     <div class="accordion-body">
        <p><a href="consultar-clientes.php"
            class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-arrow-return-right">VER CLIENTES</i></a></p>
        </div>
    </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header">
        <?php if (isset($_SESSION['idRolUser']) && $_SESSION['idRolUser'] == 1): ?>
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree" aria-expanded="false"
            aria-controls="flush-collapseThree"><i class="bi bi-people-fill">  USUARIOS</i>
        </button>
    <?php endif; ?>
</h2>
<?php if (isset($_SESSION['idRolUser']) && $_SESSION['idRolUser'] == 1): ?>
    <div id="flush-collapseThree" class="accordion-collapse collapse"
    data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
        <p><a href="consultar-usuarios.php"
            class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-arrow-return-right">VER USUARIOS</i></a>
        </p>
    </div>
</div>
<?php endif; ?>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="bi bi-cash-coin">   PAGOS</i>

    </button>
</h2>
<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
data-bs-parent="#accordionExample">
<div class="accordion-body">

    <p><a href="consultar-pagos.php"
        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-arrow-return-right">VER PAGOS</i></a></p>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="cont">
    <div class="p-3">
        <p class="text-start fs-2 p-3">Actualizar Clientes</p>
        
        <?php
        include ("conexion/conexion.php");
        $p_id_cliente = $_GET['cl'];

        $sql = "CALL mostrardatosClientes('$p_id_cliente')";

        $cliente = mysqli_query($conexion,$sql);
        $resultado = mysqli_fetch_array($cliente);
        ?>

        <form action="bdactualizarCliente.php" method="post">
            <div class="row">
                <div class="col-6">
                    <p class="text-start fs-3">Cliente numero</p>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text"  id="txtnumero_cliente" name="txtnumero_cliente" value="<?php echo $resultado['id_cliente']; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-start fs-3">Nombre del Cliente</p>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text"  id="txtNombreCliente" name="txtNombreCliente" value="<?php echo $resultado['Nombre']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-start fs-3">Telefono 1</p>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text"  id="txtTelefono1" name="txtTelefono1" value="<?php echo $resultado['telefono_1']; ?>">
                </div>
                <div class="col-6">
                    <p class="text-start fs-3">Telefono 2</p>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text"  id="txtTelefono2" name="txtTelefono2" value="<?php echo $resultado['telefono_2']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-start fs-3">Direccion del Cliente</p>
                </div>
                <div class="col-6">
                    <input class="form-control" type="text"  id="txtDireccionCliente" name="txtDireccionCliente" value="<?php echo $resultado['direccion_cliente']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="text-start fs-3">Referencias</p>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn-color btn btn-secondary">Guardar</button>
                    <button type="button" class="btn-color btn btn-secondary" onclick="window.location.href='consultar-clientes.php'">Cancelar</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtreferenciasCliente"><?php echo $resultado['referencias_cliente']; ?></textarea>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<script src="js/control.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>