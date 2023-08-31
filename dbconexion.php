<?php
$credentialSets = array(
    array("localhost", "root", "", "nutri"),
    // Conjunto 1
    array("23.145.120.75", "gonzaloe_gonzaloe", "2+z0DZv#l95OYy", "gonzaloe_Prueba1") // Conjunto 2
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