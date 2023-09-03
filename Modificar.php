<?php include 'header.php';

include 'dbconexion.php';
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera la ID del formulario
    $id = $_POST["id"];

    // Consulta SQL para obtener los datos del paciente
    $query = "SELECT * FROM pacientes WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Llena los campos del formulario con los datos del paciente
        $nombre = $row["nombre"];
        $edad = $row["edad"];
        $sexo = $row["sexo"];
        $fecha = $row["fecha"];
        $peso = $row["peso"];
        $talla = $row["talla"];
        $actividad = $row["actividad"];
        
        $enfermedad = $row["enfermedad"];
    }
}



// Cerrar la conexión
$conn->close();
?>

<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Registro de paciente
                </div>
                <div class="card-body">
                    <form method="Post" action="index.php">
                        <!-- Datos personales -->

                        <h5 class="card-title">Datos personales</h5>
                        <div class="mb-3">
                            <label for="id" class="form-label">ID del paciente</label>
                            <input type="number" class="form-control" id="id" name="id" value="<?php echo isset($_POST["id"]) ? $_POST["id"] : ''; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad"
                                value="<?php echo isset($edad) ? $edad : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" name="sexo" required>
                                <option value="masculino" <?php echo (isset($sexo) && $sexo === 'masculino') ? 'selected' : ''; ?>>Masculino</option>
                                <option value="femenino" <?php echo (isset($sexo) && $sexo === 'femenino') ? 'selected' : ''; ?>>Femenino</option>
                                <option value="otro" <?php echo (isset($sexo) && $sexo === 'otro') ? 'selected' : ''; ?>>
                                    Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Inicio</label>
                            <input type="date" class="form-control" id="fecha" name="fecha"
                                value="<?php echo isset($fecha) ? $fecha : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="peso" class="form-label">Peso</label>
                            <input type="number" class="form-control" id="peso" step="0.01" name="peso"
                                value="<?php echo isset($peso) ? $peso : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="talla" class="form-label">Talla</label>
                            <input type="number" class="form-control" id="talla" step="0.01" name="talla"
                                value="<?php echo isset($talla) ? $talla : ''; ?>" required>
                        </div>

                        <!-- Actividad física -->
                        <h5 class="card-title">Actividad física</h5>
                        <div class="mb-3">
                            
                            <input type="number" class="form-control" id="actividad" step="0.01" name="actividad"
                                value="<?php echo isset($actividad) ? $actividad : ''; ?>">
                        </div>
                        

                        <!-- Enfermedad -->
                        <h5 class="card-title">Enfermedad</h5>
                        <div class="mb-3">
                            <label for="enfermedad" class="form-label">Enfermedad</label>
                            <textarea class="form-control" id="enfermedad" name="enfermedad"
                                rows="3"><?php echo isset($enfermedad) ? $enfermedad : ''; ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>