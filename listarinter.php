<h1 class="mt-4">Listar Intercambios</h1>
<!-- Agregar la tabla de lista de intercambios aquí -->
<div class="table-responsive">
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
                <td>Almidones</td>
                <td><input type="text" id="almidones" value="8" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergiaalmidones" value="640" style="width: 50px;"></td>
                <td><input type="text" id="inputchoalmidones" value="120" style="width: 50px;"></td>
                <td><input type="text" id="inputproalmidones" value="24" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasaalmidones" value="8" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Frutas</td>
                <td><input type="text" id="frutas" value="4" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergiafrutas" value="240" style="width: 50px;"></td>
                <td><input type="text" id="inputchofrutas" value="60" style="width: 50px;"></td>
                <td><input type="text" id="inputprofrutas" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasafrutas" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Verduras</td>
                <td><input type="text" id="verduras" value="3" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergiaverduras" value="75" style="width: 50px;"></td>
                <td><input type="text" id="inputchoverduras" value="15" style="width: 50px;"></td>
                <td><input type="text" id="inputproverduras" value="6" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasaverduras" value="0" style="width: 50px;"></td>
            </tr>

            <tr>
                <td>Leche descremada</td>
                <td><input type="text" id="lechedescremada" value="0" oninput="intercambios();" style="width: 50px;">
                </td>
                <td><input type="text" id="inputenergialechedescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputcholechedescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprolechedescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasalechedescremada" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Leche semidescremada</td>
                <td><input type="text" id="lechesemidescremada" value="0" oninput="intercambios();"
                        style="width: 50px;"></td>
                <td><input type="text" id="inputenergialechesemidescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputcholechesemidescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprolechesemidescremada" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasalechesemidescremada" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Leche entera</td>
                <td><input type="text" id="lecheentera" value="2" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergialecheentera" value="300" style="width: 50px;"></td>
                <td><input type="text" id="inputcholecheentera" value="24" style="width: 50px;"></td>
                <td><input type="text" id="inputprolecheentera" value="16" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasalecheentera" value="16" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Carnes muy bajo en grasa</td>
                <td><input type="text" id="carnesmuybajograsa" value="6" oninput="intercambios();" style="width: 50px;">
                </td>
                <td><input type="text" id="inputenergiacarnesmuybajograsa" value="210" style="width: 50px;">
                </td>
                <td><input type="text" id="inputchocarnesmuybajograsa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprocarnesmuybajograsa" value="42" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasacarnesmuybajograsa" value="6" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Carnes baja en grasa</td>
                <td><input type="text" id="carnesbajagrasa" value="0" oninput="intercambios();" style="width: 50px;">
                </td>
                <td><input type="text" id="inputenergiacarnesbajagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputchocarnesbajagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprocarnesbajagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasacarnesbajagrasa" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Carnes moderado en grasa</td>
                <td><input type="text" id="carnesmoderadograsa" value="2" oninput="intercambios();"
                        style="width: 50px;"></td>
                <td><input type="text" id="inputenergiacarnesmoderadograsa" value="150" style="width: 50px;">
                </td>
                <td><input type="text" id="inputchocarnesmoderadograsa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprocarnesmoderadograsa" value="14" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasacarnesmoderadograsa" value="10" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Carnes alta en grasa</td>
                <td><input type="text" id="carnesaltagrasa" value="0" oninput="intercambios();" style="width: 50px;">
                </td>
                <td><input type="text" id="inputenergiacarnesaltagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputchocarnesaltagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprocarnesaltagrasa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasacarnesaltagrasa" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Grasa</td>
                <td><input type="text" id="grasa" value="2" oninput="intercambios();" style="width: 50px;"> </td>
                <td><input type="text" id="inputenergiagrasa" value="90" style="width: 50px;"></td>
                <td><input type="text" id="inputchograsa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputprograsa" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasagrasa" value="10" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Azúcar</td>
                <td><input type="text" id="azucar" value="3" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergiaazucar" value="180" style="width: 50px;"></td>
                <td><input type="text" id="inputchoazucar" value="45" style="width: 50px;"></td>
                <td><input type="text" id="inputproazucar" value="0" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasaazucar" value="0" style="width: 50px;"></td>
            </tr>
            <tr>
                <td>Frutos secos</td>
                <td><input type="text" id="frutossecos" value="2" oninput="intercambios();" style="width: 50px;"></td>
                <td><input type="text" id="inputenergiafrutossecos" value="140" style="width: 50px;"></td>
                <td><input type="text" id="inputchofrutossecos" value="6" style="width: 50px;"></td>
                <td><input type="text" id="inputprofrutossecos" value="6" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasafrutossecos" value="10" style="width: 50px;"></td>
            </tr>

            <tr>
                <th>Total</th>
                <td>Kcal</td>
                <td><input type="text" id="inputenergiatotal" value="2025" style="width: 50px;"></td>
                <td><input type="text" id="inputchototal" value="270" style="width: 50px;"></td>
                <td><input type="text" id="inputprototal" value="108" style="width: 50px;"></td>
                <td><input type="text" id="inputgrasatotal" value="60" style="width: 50px;"></td>
            </tr>
            <tr>
                <th>INTERPRETACION</th>
                <td>%AD</td>
                <td><input type="text" id="inputadinterpretacion" value="63" style="width: 50px;"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>CAN</td>
                <td><input type="text" id="inputcan" value="0.61" style="width: 50px;"></td>
                <td><input type="text" id="inputcan1.35" value="1.35" style="width: 50px;"></td>
                <td><input type="text" id="inputcan0.68" value="0.68" style="width: 50px;"></td>
            </tr>


        </tbody>
    </table>
</div>