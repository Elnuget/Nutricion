<?php
include 'header.php';
include 'dbconexion.php';


// Consulta para obtener los nombres desde la base de datos
$query = "SELECT nombre FROM pacientes";
$resultado = mysqli_query($conn, $query);

$nombres = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $nombres[] = $fila['nombre'];
}

// Función para calcular el IMC
function calcularIMC($peso, $talla)
{
    // Calcula el IMC usando la fórmula IMC = peso (kg) / (altura (m) * altura (m))
    $imc = $peso / ($talla * $talla);
    return number_format($imc, 2); // Formatea el resultado a dos decimales
}
// Función para clasificar al paciente según su IMC
function clasificarIMC($imc)
{
    if ($imc < 18.5) {
        return "Bajo peso";
    } elseif ($imc >= 18.5 && $imc <= 24.9) {
        return "Normal";
    } else {
        return "Sobrepeso";
    }
}
// Función para calcular el requerimiento calórico
function calcularRequerimientoCalorico($sexo, $imc, $edad, $peso, $talla, $actividad)
{
    if ($sexo == "masculino" && clasificarIMC($imc) == "Normal") {
        return 662 - (9.53 * $edad) + $actividad * ((15.91 * $peso) + (539.6 * $talla));
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Normal") {
        return 354 - (6.91 * $edad) + $actividad * ((9.36 * $peso) + (726 * $talla));
    } elseif ($sexo == "masculino" && clasificarIMC($imc) == "Bajo peso") {
        return (66 + (13.7 * $peso) + (5 * $talla) - (6.8 * $edad)) * $actividad;
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Bajo peso") {
        return (665 + (9.6 * $peso) + (1.7 * $talla) - (4.7 * $edad)) * $actividad;
    } elseif ($sexo == "masculino" && clasificarIMC($imc) == "Sobrepeso") {
        return ((10 * $peso) + (6.25 * $talla) - (5 * $edad) + 5) * $actividad;
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Sobrepeso") {
        return ((10 * $peso) + (6.25 * $talla) - (5 * $edad) - 161) * $actividad;
    }
    return 0; // Valor por defecto si no se cumple ninguna condición
}

?>

<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Oferta Alimentaria</h5>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="nombrePaciente" class="form-label">Nombre del Paciente:</label>
                            <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente"
                                list="pacienteList">
                            <datalist id="pacienteList">
                                <?php foreach ($nombres as $nombre) { ?>
                                    <option value="<?php echo $nombre; ?>">
                                    <?php } ?>
                            </datalist>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                    <?php
                    // Inicializar variables para los datos del paciente
                    $nombre = $edad = $sexo = $fecha = $peso = $talla = $actividad = $imc = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Obtener el nombre del paciente enviado por POST
                        $nombrePaciente = $_POST["nombrePaciente"];

                        // Consulta para obtener los datos del paciente
                        $query = "SELECT * FROM pacientes WHERE nombre = '$nombrePaciente'";
                        $resultado = mysqli_query($conn, $query);

                        if ($row = mysqli_fetch_assoc($resultado)) {
                            // Recuperar los datos del paciente
                            $nombre = $row["nombre"];
                            $edad = $row["edad"];
                            $sexo = $row["sexo"];
                            $fecha = $row["fecha"];
                            $peso = $row["peso"];
                            $talla = $row["talla"];
                            $actividad = $row["actividad"];

                            // Calcular el IMC
                            $imc = calcularIMC($peso, $talla);
                        }
                    }

                    ?>
                    <!-- Mostrar los datos del paciente y el IMC -->
                    <div class="mt-4">
                        <?php if (!empty($nombre)) { ?>
                            <h6>Nombre del Paciente:
                                <?php echo $nombre; ?>
                            </h6>
                            <p>Edad:
                                <?php echo $edad; ?>
                            </p>
                            <p>Sexo:
                                <?php echo $sexo; ?>
                            </p>
                            <p>Fecha:
                                <?php echo $fecha; ?>
                            </p>
                            <p>Peso:
                                <?php echo $peso; ?> kg
                            </p>
                            <p>Talla:
                                <?php echo $talla; ?> m
                            </p>
                            <p>Actividad:
                                <?php echo $actividad; ?>
                            </p>
                            <?php if (!empty($imc)) { ?>
                                <p>IMC:
                                    <?php echo $imc; ?> kg/m^2
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- Mostrar la clasificación del IMC-->
                    <div class="mt-4">
                        <?php if (!empty($nombre)) { ?>

                            <!-- Otros datos del paciente aquí... -->
                            <?php if (!empty($imc)) { ?>

                                <p>Clasificación IMC:
                                    <?php echo clasificarIMC($imc); ?>
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                   <!--Mostrar el requerimiento calórico-->
                    <div class="mt-4">
                        <?php if (!empty($nombre)) { ?>

                            <!-- Otros datos del paciente aquí... -->
                            <?php if (!empty($imc)) { ?>

                                
                                <p>Requerimiento Calórico:
                                    <?php echo calcularRequerimientoCalorico($sexo, $imc, $edad, $peso, $talla, $actividad); ?>
                                    kcal/día
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>