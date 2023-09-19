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