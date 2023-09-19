<?php 
include 'header.php';
include 'pregistrar.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5z5l5l5l5l5l5l5l5l5l5l5l5l5l5l5l5l5l5" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Registro de paciente</h3>
                </div>
                <div class="card-body">
                    <form method="Post">

                        <!-- Datos personales -->
                        <h5 class="card-title text-primary">Datos personales</h5>
                        <div class="mb-3">
                            <label for="nombre" class="form-label"><i class="fas fa-user"></i> Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <!-- ... (continuar con otros campos de datos personales, agregando íconos y mejorando los labels) ... -->
                        <!-- ... (la parte anterior del código) ... -->

                        <div class="mb-3">
                            <label for="edad" class="form-label"><i class="fas fa-birthday-cake"></i> Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label"><i class="fas fa-venus-mars"></i> Sexo</label>
                            <select class="form-select" id="sexo" name="sexo" required>
                                <option value="masculino">Hombre</option>
                                <option value="femenino">Mujer</option>                               
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label"><i class="fas fa-calendar-alt"></i> Fecha de inicio</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="peso" class="form-label"><i class="fas fa-weight"></i> Peso (kg)</label>
                            <input type="number" class="form-control" id="peso" name="peso" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="talla" class="form-label"><i class="fas fa-ruler-vertical"></i> Talla (m)</label>
                            <input type="number" class="form-control" id="talla" name="talla" step="0.01" required>
                        </div>
                        
<!-- ... (la parte posterior del código) ... -->


                        <!-- Actividad física -->
                        <h5 class="card-title text-primary">Actividad física</h5>
                        <div class="mb-3">
                            <label for="actividad" class="form-label"><i class="fas fa-heartbeat"></i> Nivel de actividad</label>
                            <input type="number" class="form-control" id="actividad" name="actividad" step="0.01" placeholder="Indica tu nivel de actividad física (ej. 5)">
                        </div>

                        <!-- Enfermedad -->
                        <h5 class="card-title text-primary">Enfermedad</h5>
                        <div class="mb-3">
                            <label for="enfermedad" class="form-label"><i class="fas fa-notes-medical"></i> Enfermedad</label>
                            <textarea class="form-control" id="enfermedad" name="enfermedad" rows="3" placeholder="Detalla la enfermedad, si la hay"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
