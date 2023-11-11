<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Psicopedagogia</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="../img/favicon.ico" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Psicopedagogia
            </a>
            <!-- Boton del dashboard -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- inicio Dashboard -->
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" data-bs-scroll="false" data-bs-backdrop="static" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                <!-- cuerpo del Dashboard -->
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="mx-auto d-block">
                            <img src="../img/user.png" alt="" height="150px" width="150px">
                        </li>
                        <li class="mx-auto d-block" style="font-size: 1.8rem; text-align: center;">
                            <!-- Nombre del usuario -->
                            <?php echo ($_SESSION['nombre']); //Muestro el nombre de quien inicio sesion?>
                        </li>
                        <li class="mx-auto d-block">
                        <div class="btn-group mx-auto" role="group" aria-label="Button group with nested dropdown">
                            <!-- <button type="button" class="btn btn-outline-primary">Cambiar contraseña</button> -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#cerrar">Cerrar Sesion</button>
                        </div>
                        </li>
                        <li><br></li>
                        <li>
                            <div class="accordion" id="accordionExample">
                                <!-- Acordion de Tests -->
                                <div class="accordion-item bg-dark">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa-solid fa-book-open" style="margin-right: 0.5rem;"></i>Examenes
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-white">
                                            <div class="list-group list-group-flush">
                                                <a href="test1.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa-solid fa-pen" style="margin-right: 0.5rem;"></i>Canal de aprendizaje de preferencia</a>
                                                <a href="test2.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa-solid fa-pen" style="margin-right: 0.5rem;"></i>Estilos de aprendizaje (Honey Alonso)</a>
                                                <a href="test3.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa-solid fa-pen" style="margin-right: 0.5rem;"></i>Estilos de aprendizaje (Modelo PNL)</a>
                                                <a href="test4.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa-solid fa-pen" style="margin-right: 0.5rem;"></i>Cuestionario de Riesgos Psicosociales</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <br>
                        </li>
                        <!-- Botoles de los modales -->
                        <li>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Aviso de privacidad
                                </button>
                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Politica de privacidad
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- fin del navbar -->
    
    <!-- Modales -->

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso de privacidad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                En Psicopedagogía, valoramos y respetamos su privacidad. Todos los datos personales recopilados a través de nuestros tests se mantienen estrictamente 
                confidenciales y se utilizan únicamente con fines de evaluación y mejora del aprendizaje. No compartimos, vendemos ni divulgamos su información a 
                terceros sin su consentimiento.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Politica de privacidad</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Nuestra política de privacidad está diseñada para proteger la información personal de nuestros usuarios. Puede encontrar información detallada sobre 
                    cómo recopilamos, almacenamos y utilizamos sus datos en nuestra Política de Privacidad. Respetamos todas las leyes de protección de datos y estamos 
                    comprometidos con mantener su información segura.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cerrar sesion -->
    <div class="modal fade" id="cerrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cerrar sesion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro de que quieres cerrar sesion?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../php/logout.php" role="button">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Inicio del contenido -->
    <div style="background-color: rgb(184, 184, 184);">
        <div class="container">