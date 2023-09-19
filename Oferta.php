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
        <div class="col-12">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Oferta Alimentaria</h5>
                    <?php
                    include 'OAdatos.php';
                    include 'OAmacro.php';
                    ?>
                    
                        
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="recalcular.js">

                               
                            </script>




                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>