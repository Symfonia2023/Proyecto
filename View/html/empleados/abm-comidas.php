<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../resources/LogoSYMFONIA.png" type="image/png">
    <title>ABM Comidas</title>
</head>
<body>

    <h2>ABM Comidas</h2> 

    <table id="tablaComidas" border="1rem">
        <thead>
            <tr>
                <th>Nombre comida</th>
                <th>Tiempo Elaboración (minutos)</th>
                <th>Tipo dieta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="cuerpoComidas">
            <tr id="formFila">
                <td><input type="text" id="nombreComida" placeholder="Nombre comida" required></td>
                <td><input type="number" id="tiempoElaboracion" placeholder="Tiempo elaboración" required></td>
                <td>
                    <form>
                        <select id="tipoDieta">
                            <option value="opcion1">Estandar</option>
                            <option value="opcion2">Vegetariano</option>
                            <option value="opcion3">Ovolactovegetariano</option>
                            <option value="opcion4">Celiaco</option>
                        </select>
                    </form>
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