<?php
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
    $enfermedad = $_POST["enfermedad"];

    // Consulta SQL para actualizar los datos en la tabla
    $sql = "UPDATE pacientes SET nombre='$nombre', edad=$edad, sexo='$sexo', fecha='$fecha', peso=$peso, talla=$talla, actividad='$actividad', enfermedad='$enfermedad' WHERE id=$id";

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