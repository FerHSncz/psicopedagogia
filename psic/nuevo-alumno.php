<?php 
    include '../config.php';
    include 'php/session.php';
    include 'recursos/header.php';
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Registrar Alumno</h1>
                        <br>
                        <form method="POST" action="php/add-alumno.php" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba el nombre completo" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono:</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Escriba el número de celular o casa"  required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="carrera" class="form-label">Carrera:</label>
                                        <select class="form-select" id="carrera" name="carrera" required>
                                            <option value="" selected disabled>Seleccionar una carrera...</option>
                                            <option value="Ing. en Procesos Alimentarios">Ing. en Procesos Alimentarios</option>
                                            <option value="Ing. en Mantenimiento Industrial">Ing. en Mantenimiento Industrial</option>
                                            <option value="Ing. en Desarrollo y Gestión de Software">Ing. en Desarrollo y Gestión de Software</option>
                                            <option value="Ing. en Energías Renovables">Ing. en Energías Renovables</option>
                                            <option value="Lic. en Gestión del Capital Humano">Lic. en Gestión del Capital Humano</option>
                                            <option value="Ing. en Metal Mecánica">Ing. en Metal Mecánica</option>
                                            <option value="Ing. en Logística Internacional">Ing. en Logística Internacional</option>
                                            <option value="Lic. en Gestión y Desarrollo Turístico">Lic. en Gestión y Desarrollo Turístico</option>
                                            <option value="Lic. en Gastronomía">Lic. en Gastronomía</option>
                                        </select>
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