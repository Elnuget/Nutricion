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
                    <?php echo $caloriasCarbohidratos; ?> Kcal
                </td>
                <td>
                    <?php echo $gramosCarbohidratos; ?> g
                </td>
            </tr>
            <tr>
                <th scope="row">Proteínas</th>
                <td>
                    <input type="text" id="inputPorcentajeProteinas" value="<?php echo $porcentajeProteinas; ?>" />
                </td>
                <td>
                    <?php echo $caloriasProteinas; ?> Kcal
                </td>
                <td>
                    <?php echo $gramosProteinas; ?> g
                </td>
            </tr>
            <tr>
                <th scope="row">Grasa</th>
                <td>
                    <input type="text" id="inputPorcentajeGrasa" value="<?php echo $porcentajeGrasa; ?>" />
                </td>
                <td>
                    <?php echo $caloriasGrasa; ?> Kcal
                </td>
                <td>
                    <?php echo $gramosGrasa; ?> g
                </td>
            </tr>
            <tr>
                <th scope="row">Total</th>
                <td>
                    <span id="totalPorcentaje">
                        <?php echo $porcentajeCarbohidratos + $porcentajeProteinas + $porcentajeGrasa; ?>%
                    </span>
                </td>
                <td>
                    <span id="totalCalorias">
                        <?php echo $caloriasCarbohidratos + $caloriasProteinas + $caloriasGrasa; ?>
                        Kcal
                    </span>
                </td>
                <td>
                    <span id="totalGramos">
                        <?php echo $gramosCarbohidratos + $gramosProteinas + $gramosGrasa; ?> g
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <button id="recalcular">Recalcular</button>
</div>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th id="grupo-alimentos">Grupo de alimentos</th>
            <th id="etiqueta-intercambios">Intercambios</th>
            <th id="etiqueta-energia">Energía (Kcal)</th>
            <th id="etiqueta-cho">CHO (g)</th>
            <th id="etiqueta-pro">PRO (g)</th>
            <th id="etiqueta-grasa">Grasa (g)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td id="almidones">Almidones</td>
            <td><input type="text" id="input-intercambios" value="8"></td>
            <td><input type="text" id="input-energia-almidones" value="640"></td>
            <td><input type="text" id="input-cho-almidones" value="120"></td>
            <td><input type="text" id="input-pro-almidones" value="24"></td>
            <td><input type="text" id="input-grasa-almidones" value="8"></td>
        </tr>
        <tr>
            <td id="frutas">Frutas</td>
            <td><input type="text" id="input-frutas" value="4"></td>
            <td><input type="text" id="input-energia-frutas" value="240"></td>
            <td><input type="text" id="input-cho-frutas" value="60"></td>
            <td><input type="text" id="input-pro-frutas" value="0"></td>
            <td><input type="text" id="input-grasa-frutas" value="0"></td>
        </tr>
        <tr>
            <td id="verduras">Verduras</td>
            <td><input type="text" id="input-verduras" value="3"></td>
            <td><input type="text" id="input-energia-verduras" value="75"></td>
            <td><input type="text" id="input-cho-verduras" value="15"></td>
            <td><input type="text" id="input-pro-verduras" value="6"></td>
            <td><input type="text" id="input-grasa-verduras" value="0"></td>
        </tr>
        <!-- Continuación de las filas de la tabla -->
        <tr>
            <td id="leche-descremada">Leche descremada</td>
            <td><input type="text" id="input-leche-descremada" value="0"></td>
            <td><input type="text" id="input-energia-leche-descremada" value="0"></td>
            <td><input type="text" id="input-cho-leche-descremada" value="0"></td>
            <td><input type="text" id="input-pro-leche-descremada" value="0"></td>
            <td><input type="text" id="input-grasa-leche-descremada" value="0"></td>
        </tr>
        <tr>
            <td id="leche-semidescremada">Leche semidescremada</td>
            <td><input type="text" id="input-leche-semidescremada" value="0"></td>
            <td><input type="text" id="input-energia-leche-semidescremada" value="0"></td>
            <td><input type="text" id="input-cho-leche-semidescremada" value="0"></td>
            <td><input type="text" id="input-pro-leche-semidescremada" value="0"></td>
            <td><input type="text" id="input-grasa-leche-semidescremada" value="0"></td>
        </tr>
        <tr>
            <td id="leche-entera">Leche entera</td>
            <td><input type="text" id="input-leche-entera" value="2"></td>
            <td><input type="text" id="input-energia-leche-entera" value="300"></td>
            <td><input type="text" id="input-cho-leche-entera" value="24"></td>
            <td><input type="text" id="input-pro-leche-entera" value="16"></td>
            <td><input type="text" id="input-grasa-leche-entera" value="16"></td>
        </tr>
        <tr>
            <td id="carnes-muy-bajo-grasa">Carnes muy bajo en grasa</td>
            <td><input type="text" id="input-carnes-muy-bajo-grasa" value="6"></td>
            <td><input type="text" id="input-energia-carnes-muy-bajo-grasa" value="210"></td>
            <td><input type="text" id="input-cho-carnes-muy-bajo-grasa" value="0"></td>
            <td><input type="text" id="input-pro-carnes-muy-bajo-grasa" value="42"></td>
            <td><input type="text" id="input-grasa-carnes-muy-bajo-grasa" value="6"></td>
        </tr>
        <tr>
            <td id="carnes-baja-grasa">Carnes baja en grasa</td>
            <td><input type="text" id="input-carnes-baja-grasa" value="0"></td>
            <td><input type="text" id="input-energia-carnes-baja-grasa" value="0"></td>
            <td><input type="text" id="input-cho-carnes-baja-grasa" value="0"></td>
            <td><input type="text" id="input-pro-carnes-baja-grasa" value="0"></td>
            <td><input type="text" id="input-grasa-carnes-baja-grasa" value="0"></td>
        </tr>
        <tr>
            <td id="carnes-moderado-grasa">Carnes moderado en grasa</td>
            <td><input type="text" id="input-carnes-moderado-grasa" value="2"></td>
            <td><input type="text" id="input-energia-carnes-moderado-grasa" value="150"></td>
            <td><input type="text" id="input-cho-carnes-moderado-grasa" value="0"></td>
            <td><input type="text" id="input-pro-carnes-moderado-grasa" value="14"></td>
            <td><input type="text" id="input-grasa-carnes-moderado-grasa" value="10"></td>
        </tr>
        <tr>
            <td id="carnes-alta-grasa">Carnes alta en grasa</td>
            <td><input type="text" id="input-carnes-alta-grasa" value="0"></td>
            <td><input type="text" id="input-energia-carnes-alta-grasa" value="0"></td>
            <td><input type="text" id="input-cho-carnes-alta-grasa" value="0"></td>
            <td><input type="text" id="input-pro-carnes-alta-grasa" value="0"></td>
            <td><input type="text" id="input-grasa-carnes-alta-grasa" value="0"></td>
        </tr>
        <tr>
            <td id="grasa">Grasa</td>
            <td><input type="text" id="input-grasa" value="2"></td>
            <td><input type="text" id="input-energia-grasa" value="90"></td>
            <td><input type="text" id="input-cho-grasa" value="0"></td>
            <td><input type="text" id="input-pro-grasa" value="0"></td>
            <td><input type="text" id="input-grasa-grasa" value="10"></td>
        </tr>
        <tr>
            <td id="azucar">Azúcar</td>
            <td><input type="text" id="input-azucar" value="3"></td>
            <td><input type="text" id="input-energia-azucar" value="180"></td>
            <td><input type="text" id="input-cho-azucar" value="45"></td>
            <td><input type="text" id="input-pro-azucar" value="0"></td>
            <td><input type="text" id="input-grasa-azucar" value="0"></td>
        </tr>
        <tr>
            <td id="frutos-secos">Frutos secos</td>
            <td><input type="text" id="input-frutos-secos" value="2"></td>
            <td><input type="text" id="input-energia-frutos-secos" value="140"></td>
            <td><input type="text" id="input-cho-frutos-secos" value="6"></td>
            <td><input type="text" id="input-pro-frutos-secos" value="6"></td>
            <td><input type="text" id="input-grasa-frutos-secos" value="10"></td>
        </tr>
        <tr>
            <td id="bebidas">Bebidas ()</td>
            <td><input type="text" id="input-bebidas" value="0"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th id="total">Total</th>
            <td>Kcal</td>
            <td><input type="text" id="input-energia-total" value="2025"></td>
            <td><input type="text" id="input-cho-total" value="270"></td>
            <td><input type="text" id="input-pro-total" value="108"></td>
            <td><input type="text" id="input-grasa-total" value="60"></td>
        </tr>
        <tr>
            <th id="interpretacion">INTERPRETACION</th>
            <td>%AD</td>
            <td><input type="text" id="input-ad-interpretacion" value="63"></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>CAN</td>
            <td><input type="text" id="input-can" value="0.61"></td>
            <td><input type="text" id="input-can-1.35" value="1.35"></td>
            <td><input type="text" id="input-can-0.68" value="0.68"></td>
        </tr>


    </tbody>
</table>