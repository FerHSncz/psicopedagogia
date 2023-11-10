<?php
    include '../config.php';
    include 'php/session.php';
    include 'php/change-pass.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Cambiar contraseña de la cuenta</h1>
                        <br>
                        <form method="POST" action="cambiar_pass.php" >
                            <div class="row">                    
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Nueva Contraseña:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Escriba su nueva contraseña" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </form>
                            <!-- Script para mostrar la alerta -->
                            <script>
                                var mensaje = '<?php echo $mensaje; ?>';
                                if (mensaje !== '') {
                                    alert(mensaje);
                                }
                            </script>
                    </div>                                
                </main>
<?php 
    include 'recursos/footer.php';
?>