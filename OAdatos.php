<style>
    .form-container, .patient-details {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .patient-details {
        background-color: #f9f9f9;
    }

    .detail-title {
        margin-bottom: 20px;
        font-weight: bold;
        color: #333;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .detail-label {
        color: #666;
    }

    .detail-value {
        color: #333;
    }

    .detail-input {
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 4px;
        width: 100px;
    }

    .detail-column {
        display: flex;
        flex-direction: column;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
    }
</style>

<form method="POST" class="form-container">
    <div class="mb-3">
        <label for="nombrePaciente" class="form-label">Nombre del Paciente:</label>
        <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" list="pacienteList"
            placeholder="Escriba el nombre del paciente" style="width: 300px;">

        <datalist id="pacienteList">
            <?php foreach ($nombres as $nombre) { ?>
                <option value="<?php echo $nombre; ?>"></option>
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
<div class="patient-details mt-4">
    <?php if (!empty($nombre)) { ?>
        <h6 class="detail-title">Detalles del Paciente</h6>
        <div class="detail-row">
            <div class="detail-column mr-3">
                <div class="detail-item">
                    <span class="detail-label">Nombre:</span>
                    <span class="detail-value"><?php echo $nombre; ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Edad:</span>
                    <span class="detail-value"><?php echo $edad; ?> años</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Sexo:</span>
                    <span class="detail-value"><?php echo $sexo; ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Fecha:</span>
                    <span class="detail-value"><?php echo $fecha; ?></span>
                </div>
            </div>
            <div class="detail-column">
                <div class="detail-item">
                    <span class="detail-label">Peso:</span>
                    <span class="detail-value"><?php echo $peso; ?> kg</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Talla:</span>
                    <span class="detail-value"><?php echo $talla; ?> m</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Actividad:</span>
                    <span class="detail-value"><?php echo $actividad; ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">IMC:</span>
                    <span class="detail-value"><?php echo $imc; ?> kg/m²</span>
                </div>
            </div>
        </div>
        <div class="detail-item">
            <span class="detail-label">Clasificación IMC:</span>
            <span class="detail-value"><?php echo clasificarIMC($imc); ?></span>
        </div>
        <div class="detail-item">
            <span class="detail-label">Requerimiento Calórico:</span>
            <input type="text" id="requerimiento" class="detail-input"
                   value="<?php echo calcularRequerimientoCalorico($sexo, $imc, $edad, $peso, $talla, $actividad); ?> " />
            kcal/día
        </div>
    <?php } ?>
</div>
