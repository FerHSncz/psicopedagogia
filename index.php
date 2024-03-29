<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <!-- PWA -->
    <link rel="manifest" href="manifest.json">
    <!-- Icono -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Estilos CSS locales -->
    
    <!-- CSS Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <!-- Agregamos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="">
        <form action="php/validar.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <br><br><br>
                    <center><img src="img/iniciar-sesion.png" height="100" width="100"></center>
                    <h1 class="text-center"><strong>Iniciar sesión</strong></h1>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Ingrese su email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div>
                </div>
            </div>
        </form>
        <br><br><br><br>    
    </div>

    </div>
    <!-- Agregamos los archivos de JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4+NQ"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8ew"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>