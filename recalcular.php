<?php
// Incluye el archivo que contiene las funciones necesarias
include "function.php";

// Verifica si los datos necesarios se enviaron a través de POST
if(isset($_POST['requerimiento'], $_POST['porcentajeCarbohidratos'], $_POST['porcentajeProteinas'], $_POST['porcentajeGrasa'])) {
    // Obtén los valores del formulario
    $requerimientoCalorico = $_POST['requerimiento'];
    $porcentajeCarbohidratos = $_POST['porcentajeCarbohidratos'];
    $porcentajeProteinas = $_POST['porcentajeProteinas'];
    $porcentajeGrasa = $_POST['porcentajeGrasa'];

    // // Calcular las calorías de cada macromolécula en función del requerimiento calórico
    $caloriasCarbohidratos = calcularCaloriasCarbohidratos($requerimientoCalorico, $porcentajeCarbohidratos);
    $caloriasProteinas = calcularCaloriasProteinas($requerimientoCalorico, $porcentajeProteinas);
    $caloriasGrasa = calcularCaloriasGrasa($requerimientoCalorico, $porcentajeGrasa);

    // // Calcular los gramos de cada macromolécula en función de las calorías
    $gramosCarbohidratos = calcularGramosCarbohidratos($caloriasCarbohidratos);
    $gramosProteinas = calcularGramosProteinas($caloriasProteinas);
    $gramosGrasa = calcularGramosGrasa($caloriasGrasa);
    //totales
    $totalgramos=$porcentajeCarbohidratos + $porcentajeProteinas + $porcentajeGrasa;
    $totalCarlorias=$caloriasCarbohidratos+$caloriasProteinas+$caloriasGrasa;

    // Construir un arreglo con los resultados
    $resultados = [
        
        'porcentajeCarbohidratos' => $porcentajeCarbohidratos,
        'porcentajeProteinas' => $porcentajeProteinas,
        'porcentajeGrasa' => $porcentajeGrasa,
        'totalPorcentaje' => $totalgramos,
        'caloriasCarbohidratos' => $caloriasCarbohidratos,
        'caloriasProteinas' => $caloriasProteinas,
        'caloriasGrasa' => $caloriasGrasa,
        'totalCalorias' => $caloriasCarbohidratos + $caloriasProteinas + $caloriasGrasa,
        'gramosCarbohidratos' => $gramosCarbohidratos,
        'gramosProteinas' => $gramosProteinas,
        'gramosGrasa' => $gramosGrasa,
        'totalGramos' => $gramosCarbohidratos + $gramosProteinas + $gramosGrasa,
    ];

    // Devolver los resultados en formato JSON
    echo json_encode($resultados);
} else {
    // Si faltan datos en la solicitud POST, puedes manejarlo de acuerdo a tus necesidades
    echo "Faltan datos en la solicitud POST.";
}
?>
