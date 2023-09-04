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
                                                <input type="text" id="inputPorcentajeProteinas"
                                                    value="<?php echo $porcentajeProteinas; ?>" />
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
                                                <input type="text" id="inputPorcentajeGrasa"
                                                    value="<?php echo $porcentajeGrasa; ?>" />
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