<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/empleados/index-empleados.css">
    <link rel="icon" href="../../resources/LogoSYMFONIA.png" type="image/png">
    <title>Gestión</title>
</head>
<body>

  <nav>
        <ul>
            <li><a href="../login-registro/login.php"><input type="button" value="Salir" class="input-btn"></a></li>
        </ul>
    </nav>

    <section class="section-pedidos">
      <input type="button" value="Actualizar Pedidos" class="input-btn" onclick="recargarPagina()">
      <a href="abm-menus.php"><input type="button" value="ABM Menús" class="input-btn"></a>
      <a href="abm-comidas.php"><input type="button" value="ABM Comidas" class="input-btn"></a>
    </section>

    <section class="section-control-menus">
      <input type="button" value="Verificar" class="input-btn">
    </section>

    <script>
      function recargarPagina(){
        location.reload();
      }
    </script>

</body>
</html>