<?php include 'header.php'; ?>
<?php include 'dbconexion.php';
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM pacientes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Eliminación exitosa',
                text: 'El registro ha sido eliminado correctamente.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error al eliminar',
                text: 'Ha ocurrido un error al intentar eliminar el registro.',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Aceptar'
            });
        </script>";
    }
}
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $fecha = $_POST["fecha"];
    $peso = $_POST["peso"];
    $talla = $_POST["talla"];
    $actividad = $_POST["actividad"];
    $frecuencia = $_POST["frecuencia"];
    $enfermedad = $_POST["enfermedad"];

    // Consulta SQL para actualizar los datos en la tabla
    $sql = "UPDATE pacientes SET nombre='$nombre', edad=$edad, sexo='$sexo', fecha='$fecha', peso=$peso, talla=$talla, actividad='$actividad', frecuencia_actividad='$frecuencia', enfermedad='$enfermedad' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Actualización exitosa',
                text: 'Los datos se han actualizado correctamente.',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Aceptar'
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error al actualizar',
                text: 'Ha ocurrido un error al intentar actualizar los datos.',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Aceptar'
            });
        </script>";
    }
}

?>
<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Aquí va el contenido principal de tu página -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Tiempo de Dieta</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // Consulta para obtener los datos de la tabla
                    $sql = "SELECT id, nombre, edad, fecha FROM pacientes";
                    $result = $conn->query($sql);

                    // Obtener la fecha actual
                    $fechaActual = date('Y-m-d');

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Calcular el tiempo de dieta en semanas y meses
                            $fechaInicio = $row["fecha"];
                            $tiempoDeDieta = floor((strtotime($fechaActual) - strtotime($fechaInicio)) / (60 * 60 * 24));
                            $semanas = floor($tiempoDeDieta / 7);
                            $meses = floor($tiempoDeDieta / 30);

                            echo "<tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["nombre"]}</td>
                                <td>{$row["edad"]}</td>
                                <td>{$semanas} semanas / {$meses} meses</td>
                                <td>
                                <form action='Modificar.php' method='Post'>
                                    <input type='hidden' name='id' value='{$row["id"]}'>
                                    <button type='submit' class='btn btn-primary'>
                                        <i class='fas fa-pencil-alt'></i>
                                    </button>
                                </form>
                                
                                        <a href='index.php?id={$row["id"]}' class='btn btn-danger' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este registro?')\">
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>

                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay registros disponibles</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>