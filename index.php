<?php 
include 'header.php';
include 'dbconexion.php';
include 'peliminar.php';
?>

<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Aquí va el contenido principal de tu página -->
            <table class="table table-striped table-responsive-md">
                <thead class="thead-dark">
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
                                <form action='Modificar.php' method='Post' style='display: inline-block;'>
                                    <input type='hidden' name='id' value='{$row["id"]}'>
                                    <button type='submit' class='btn btn-primary'>
                                        <i class='bi bi-pencil-fill'></i>
                                    </button>
                                </form>
                                
                                        <a href='index.php?id={$row["id"]}' class='btn btn-danger' style='display: inline-block;' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este registro?')\">
                                        <i class='bi bi-trash-fill'></i>
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
