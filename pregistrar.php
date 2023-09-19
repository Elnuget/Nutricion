<?php
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
        
        $enfermedad = $_POST["enfermedad"];

        // Consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO pacientes (nombre, edad, sexo, fecha, peso, talla, actividad,  enfermedad) VALUES ('$nombre', $edad, '$sexo', '$fecha', $peso, $talla, '$actividad', '$enfermedad')";

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