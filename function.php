<?php
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
        return round(662 - (9.53 * $edad) + $actividad * ((15.91 * $peso) + (539.6 * $talla)));
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Normal") {
        return round(354 - (6.91 * $edad) + $actividad * ((9.36 * $peso) + (726 * $talla)));
    } elseif ($sexo == "masculino" && clasificarIMC($imc) == "Bajo peso") {
        return round((66 + (13.7 * $peso) + (5 * $talla) - (6.8 * $edad)) * $actividad);
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Bajo peso") {
        return round((665 + (9.6 * $peso) + (1.7 * $talla) - (4.7 * $edad)) * $actividad);
    } elseif ($sexo == "masculino" && clasificarIMC($imc) == "Sobrepeso") {
        return round(((10 * $peso) + (6.25 * $talla) - (5 * $edad) + 5) * $actividad);
    } elseif ($sexo == "femenino" && clasificarIMC($imc) == "Sobrepeso") {
        return round(((10 * $peso) + (6.25 * $talla) - (5 * $edad) - 161) * $actividad);
    }
    return 0; // Valor por defecto si no se cumple ninguna condición
}
function calcularPorcentajeCarbohidratos($imc)
{
    // Definir la fórmula para calcular el porcentaje de carbohidratos
    // Puedes ajustar esta fórmula según tus necesidades específicas
    return round(50);
}

function calcularPorcentajeProteinas($imc)
{
    // Definir la fórmula para calcular el porcentaje de proteínas
    // Puedes ajustar esta fórmula según tus necesidades específicas
    return round(20);
}

function calcularPorcentajeGrasa($imc)
{
    // Definir la fórmula para calcular el porcentaje de grasa
    // Puedes ajustar esta fórmula según tus necesidades específicas
    return round(30);
}

function calcularCaloriasCarbohidratos($requerimientoCalorico, $porcentajeCarbohidratos)
{
    // Calcular las calorías de los carbohidratos y redondear
    return round(($porcentajeCarbohidratos / 100) * $requerimientoCalorico);
}

function calcularCaloriasProteinas($requerimientoCalorico, $porcentajeProteinas)
{
    // Calcular las calorías de las proteínas y redondear
    return round(($porcentajeProteinas / 100) * $requerimientoCalorico);
}

function calcularCaloriasGrasa($requerimientoCalorico, $porcentajeGrasa)
{
    // Calcular las calorías de la grasa y redondear
    return round(($porcentajeGrasa / 100) * $requerimientoCalorico);
}

function calcularGramosCarbohidratos($caloriasCarbohidratos)
{
    // Calcular los gramos de carbohidratos basados en las calorías (4 kcal por gramo) y redondear
    return round($caloriasCarbohidratos / 4);
}

function calcularGramosProteinas($caloriasProteinas)
{
    // Calcular los gramos de proteínas basados en las calorías (4 kcal por gramo) y redondear
    return round($caloriasProteinas / 4);
}

function calcularGramosGrasa($caloriasGrasa)
{
    // Calcular los gramos de grasa basados en las calorías (9 kcal por gramo) y redondear
    return round($caloriasGrasa / 9);
}

?>