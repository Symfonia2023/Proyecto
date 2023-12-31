<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../resources/LogoSYMFONIA.png" type="image/png">
    <title>ABM Menús</title>
</head>
<body>

    <h2>ABM Menús</h2>

    <table id="tablaMenus" border="1rem">
        <thead>
            <tr>
                <th>Nombre menú</th>
                <th>Stock mínimo</th>
                <th>Stock máximo</th>
                <th>Precio</th>
                <th>Tipo menú</th>
                <th>Tipo dieta</th>
                <th>Comidas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="cuerpoMenus">
            <tr id="formFila">
                <td><input type="text" id="nombreMenu" placeholder="Nombre menú" required></td>
                <td><input type="number" id="stockMinMenu" placeholder="Stock mínimo" required></td>
                <td><input type="number" id="stockMaxMenu" placeholder="Stock máximo" required></td>
                <td><input type="number" id="precioMenu" placeholder="Precio" required></td>
                <td>    
                    <form>
                        <select id="tipoMenu">
                            <option value="opcion1">Semanal</option>
                            <option value="opcion2">Quincenal</option>
                            <option value="opcion3">Mensual</option>
                        </select>
                    </form>
                </td>
                <td>
                    <form>
                        <select id="tipoDieta">
                            <option value="opcion1">Normal</option>
                            <option value="opcion2">Vegetariano</option>
                            <option value="opcion3">Ovolactovegetariano</option>
                            <option value="opcion4">Celiaco</option>
                        </select>
                    </form>
                </td>
                <td>
                </td>
                <td>
                    <button type="button">Ingresar</button>
                </td>
            </tr>
        </tbody>
    </table>

    <br><br><br>
    <a href="index-empleados.php"><input type="button" value="Volver"></a>

</body>
</html>