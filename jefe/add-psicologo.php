<?php 
    include '../config.php'; 
    include 'php/sesion.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Psicólogo</h1>
                        <br>
                        <form method="POST" action="php/nuevo-psicologo.php" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre completo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Escriba el número de celular o casa"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Escriba el email institucional o personal" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña: <small><strong>(Automática por sistema)</strong></small></label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="12345678" readonly>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </form>
                    </div>                                
                </main>
<?php 
    include 'recursos/footer.php';
?>