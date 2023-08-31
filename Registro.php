<?php include 'header.php';

// Conjuntos de credenciales para intentar
$credentialSets = array(
    array("23.145.120.75", "gonzaloe_gonzaloe", "2+z0DZv#l95OYy", "gonzaloe_Prueba1"),
    array("localhost", "root", "", "nutri")
    
    // Agrega más conjuntos de credenciales si es necesario
);

$conn = null;

foreach ($credentialSets as $credentials) {
    $servername = $credentials[0];
    $username = $credentials[1];
    $password = $credentials[2];
    $dbname = $credentials[3];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn->connect_error) {
        break; // Si la conexión tiene éxito, sal del bucle
    }
}



// Verificar si la conexión se estableció con éxito
if ($conn && !$conn->connect_error) {
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $fecha = $_POST["fecha"];
        $peso = $_POST["peso"];
        $talla = $_POST["talla"];
        $actividad = $_POST["actividad"];
        $frecuencia = $_POST["frecuencia"];
        $enfermedad = $_POST["enfermedad"];

        // Consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO pacientes (nombre, edad, sexo, fecha, peso, talla, actividad, frecuencia_actividad, enfermedad) VALUES ('$nombre', $edad, '$sexo', '$fecha', $peso, $talla, '$actividad', '$frecuencia', '$enfermedad')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Registro exitoso',
            text: 'El registro se ha completado con éxito.',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Aceptar'
        });
    </script>";
        } else {
            echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error al registrar',
            text: 'Ha ocurrido un error al intentar registrar los datos.',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Aceptar'
        });
    </script>";
        }
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Error de conexión',
        text: 'No se pudo establecer conexión con ninguna de las credenciales.',
        confirmButtonColor: '#d33',
        confirmButtonText: 'Aceptar'
    });
</script>";
}
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
                    <form method="Post">
                        <!-- Datos personales -->
                        <h5 class="card-title">Datos personales</h5>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" name="sexo" required>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Inicio</label>
                            <input type="date" class="form-control" id="fecha" name="fecha"
                                value="<?php echo date('Y-m-d'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="peso" class="form-label">Peso</label>
                            <input type="number" class="form-control" id="peso" name="peso" required>
                        </div>
                        <div class="mb-3">
                            <label for="talla" class="form-label">Talla</label>
                            <input type="number" class="form-control" id="talla" name="talla" required>
                        </div>

                        <!-- Actividad física -->
                        <h5 class="card-title">Actividad física</h5>
                        <div class="mb-3">
                            <label for="actividad" class="form-label">Actividad</label>
                            <input type="text" class="form-control" id="actividad" name="actividad">
                        </div>
                        <div class="mb-3">
                            <label for="frecuencia" class="form-label">Frecuencia</label>
                            <input type="text" class="form-control" id="frecuencia" name="frecuencia">
                        </div>

                        <!-- Enfermedad -->
                        <h5 class="card-title">Enfermedad</h5>
                        <div class="mb-3">
                            <label for="enfermedad" class="form-label">Enfermedad</label>
                            <textarea class="form-control" id="enfermedad" name="enfermedad" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>