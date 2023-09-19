<?php if (!empty($nombre)) { ?>
    <div class="container">
        <?php include "calcular.php" ?>
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
                                value="<?php echo $porcentajeCarbohidratos; ?>" oninput="recalcular();" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputCaloriasCarbohidratos"
                                value="<?php echo $caloriasCarbohidratos; ?>" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputGramosCarbohidratos"
                                value="<?php echo $gramosCarbohidratos; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Proteínas</th>
                        <td>
                            <input type="text" id="inputPorcentajeProteinas" value="<?php echo $porcentajeProteinas; ?>"
                                oninput="recalcular();" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputCaloriasProteinas"
                                value="<?php echo $caloriasProteinas; ?>" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputGramosProteinas" value="<?php echo $gramosProteinas; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Grasa</th>
                        <td>
                            <input type="text" id="inputPorcentajeGrasa" value="<?php echo $porcentajeGrasa; ?>"
                                oninput="recalcular();" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputCaloriasGrasa" value="<?php echo $caloriasGrasa; ?>" />
                        </td>
                        <td>
                            <input readonly type="text" id="inputGramosGrasa" value="<?php echo $gramosGrasa; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>
                            <input type="text" id="totalPorcentaje" readonly
                                value="<?php echo $porcentajeCarbohidratos + $porcentajeProteinas + $porcentajeGrasa; ?>" />

                        </td>
                        <td>
                            <input type="text" id="totalCalorias" readonly
                                value="<?php echo $caloriasCarbohidratos + $caloriasProteinas + $caloriasGrasa; ?>" />
                        </td>
                        <td>
                            <input type="text" id="totalGramos" readonly
                                value="<?php echo $gramosCarbohidratos + $gramosProteinas + $gramosGrasa; ?>" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .container {
            font-family: 'Arial, sans-serif';
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid #ddd;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #f4f4f4;
            color: #333;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #eaeaea;
        }

        input[type="text"] {
            width: 60px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #66afe9;
            outline: none;
        }
    </style>

<?php 
include "listarinter.php";
} ?>