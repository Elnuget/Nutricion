<?php
include 'header.php';
include 'dbconexion.php';
include 'function.php';


// Consulta para obtener los nombres desde la base de datos
$query = "SELECT nombre FROM pacientes";
$resultado = mysqli_query($conn, $query);

$nombres = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $nombres[] = $fila['nombre'];
}


?>

<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
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


                                <p>Requerimiento Calórico (kcal/día):
                                <input type="text" id="requerimiento"
                                                    value="<?php echo calcularRequerimientoCalorico($sexo, $imc, $edad, $peso, $talla, $actividad); ?>" />
                                    
                                   
                                </p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <?php if (!empty($nombre)) { ?>
                        <div class="container">
                            <?php
                            // Calcular los valores para la distribución de macromoléculas
                            if (!empty($nombre) && !empty($imc)) {
                                // Calcular el IMC
                                $imc = calcularIMC($peso, $talla);
                                $requerimientoCalorico = calcularRequerimientoCalorico($sexo, $imc, $edad, $peso, $talla, $actividad);
                                // Obtener los porcentajes de macromoléculas basados en el IMC
                                $porcentajeCarbohidratos = calcularPorcentajeCarbohidratos($imc);
                                $porcentajeProteinas = calcularPorcentajeProteinas($imc);
                                $porcentajeGrasa = calcularPorcentajeGrasa($imc);

                                // Calcular las calorías de cada macromolécula en función del requerimiento calórico
                                $caloriasCarbohidratos = calcularCaloriasCarbohidratos($requerimientoCalorico, $porcentajeCarbohidratos);
                                $caloriasProteinas = calcularCaloriasProteinas($requerimientoCalorico, $porcentajeProteinas);
                                $caloriasGrasa = calcularCaloriasGrasa($requerimientoCalorico, $porcentajeGrasa);

                                // Calcular los gramos de cada macromolécula en función de las calorías
                                $gramosCarbohidratos = calcularGramosCarbohidratos($caloriasCarbohidratos);
                                $gramosProteinas = calcularGramosProteinas($caloriasProteinas);
                                $gramosGrasa = calcularGramosGrasa($caloriasGrasa);
                            }
                            ?>
                            <h1 class="mt-4">Distribución de la Macromolécula Calórica</h1>
                            <div class="table-responsive">
                                <table class="table table-bordered mt-4">
                                    <thead>
                                        <tr>
                                            <th>Macromolécula</th>
                                            <th>%</th>
                                            <th>Kcal</th>
                                            <th>Gramos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Carbohidratos</th>
                                            <td>
                                                <input type="text" id="inputPorcentajeCarbohidratos"
                                                    value="<?php echo $porcentajeCarbohidratos; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputCaloriasCarbohidratos"
                                                    value="<?php echo $caloriasCarbohidratos; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputGramosCarbohidratos"
                                                    value="<?php echo $gramosCarbohidratos; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Proteínas</th>
                                            <td>
                                                <input type="text" id="inputPorcentajeProteinas"
                                                    value="<?php echo $porcentajeProteinas; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputCaloriasProteinas"
                                                    value="<?php echo $caloriasProteinas; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputGramosProteinas"
                                                    value="<?php echo $gramosProteinas; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Grasa</th>
                                            <td>
                                                <input type="text" id="inputPorcentajeGrasa"
                                                    value="<?php echo $porcentajeGrasa; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputCaloriasGrasa"
                                                    value="<?php echo $caloriasGrasa; ?>" />
                                            </td>
                                            <td>
                                                <input type="text" id="inputGramosGrasa"
                                                    value="<?php echo $gramosGrasa; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total</th>
                                            <td>
                                                <input type="text" id="totalPorcentaje"
                                                    value="<?php echo $porcentajeCarbohidratos + $porcentajeProteinas + $porcentajeGrasa; ?>" />

                                            </td>
                                            <td>
                                                <input type="text" id="totalCalorias"
                                                value="<?php echo $caloriasCarbohidratos + $caloriasProteinas + $caloriasGrasa; ?>"
                                                    
                                                />
                                            </td>
                                            <td>
                                                <input type="text" id="totalGramos"
                                                value="<?php echo $gramosCarbohidratos + $gramosProteinas + $gramosGrasa; ?>" 
                                                />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button id="recalcular">Recalcular</button>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $("#recalcular").click(function () {
                                        // Obtener los nuevos valores de los inputs
                                        var nuevoPorcentajeCarbohidratos = $("#inputPorcentajeCarbohidratos").val();
                                        var nuevoPorcentajeProteinas = $("#inputPorcentajeProteinas").val();
                                        var nuevoPorcentajeGrasa = $("#inputPorcentajeGrasa").val();
                                        var nuevoCaloriasCarbohidratos = $("#inputCaloriasCarbohidratos").val();
                                        var nuevoCaloriasProteinas = $("#inputCaloriasProteinas").val();
                                        var nuevoCaloriasGrasa = $("#inputCaloriasGrasa").val();
                                        var nuevoGramosCarbohidratos = $("#inputGramosCarbohidratos").val();
                                        var nuevoGramosProteinas = $("#inputGramosProteinas").val();
                                        var nuevoGramosGrasa = $("#inputGramosGrasa").val();
                                        var requerimiento = $("#requerimiento").val();

                                        // Realizar una solicitud AJAX para recalcular los valores
                                        $.ajax({
                                            type: "POST",
                                            url: "recalcular.php", // Nombre del archivo PHP que realizará los cálculos
                                            data: {
                                                porcentajeCarbohidratos: nuevoPorcentajeCarbohidratos,
                                                porcentajeProteinas: nuevoPorcentajeProteinas,
                                                porcentajeGrasa: nuevoPorcentajeGrasa,
                                                caloriasCarbohidratos: nuevoCaloriasCarbohidratos,
                                                caloriasProteinas: nuevoCaloriasProteinas,
                                                caloriasGrasa: nuevoCaloriasGrasa,
                                                gramosCarbohidratos: nuevoGramosCarbohidratos,
                                                gramosProteinas: nuevoGramosProteinas,
                                                gramosGrasa: nuevoGramosGrasa,
                                                requerimiento: requerimiento
                                                },
                                            success: function (response) {
                                                // Actualizar los valores en la página con la respuesta del servidor
                                                var data = JSON.parse(response);
                                                
                                                $("#inputPorcentajeCarbohidratos").val(data.porcentajeCarbohidratos);
                                                $("#inputPorcentajeProteinas").val(data.porcentajeProteinas );
                                                $("#inputPorcentajeGrasa").val(data.porcentajeGrasa );
                                                $("#totalPorcentaje").val(data.totalPorcentaje );
                                                $("#inputCaloriasCarbohidratos").val(data.caloriasCarbohidratos );
                                                $("#inputCaloriasProteinas").val(data.caloriasProteinas );
                                                $("#inputCaloriasGrasa").val(data.caloriasGrasa );
                                                $("#totalCalorias").val(data.totalCalorias );
                                                $("#inputGramosCarbohidratos").val(data.gramosCarbohidratos );
                                                $("#inputGramosProteinas").val(data.gramosProteinas );
                                                $("#inputGramosGrasa").val(data.gramosGrasa );
                                                $("#totalGramos").val(data.totalGramos );
                                            }
                                        });
                                    });
                                });
                            </script>




                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>