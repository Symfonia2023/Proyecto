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

<?php
  session_start();
  if ($_SESSION["rol"] === "cliente") {
    header("Location: ../../../index.php");
  }
?>
  <nav>
        <ul>
            <li><a href="../login-registro/login.php"><input type="button" value="Salir" class="input-btn"></a></li>
        </ul>
    </nav>

    <section class="section-pedidos">
      <input type="button" value="Actualizar Pedidos" class="input-btn" onclick="recargarPagina()">
      <a href="abm-menus.php"><input type="button" value="ABM Menús" class="input-btn"></a>
      <a href="abm-comidas.php"><input type="button" value="ABM Comidas" class="input-btn"></a>
      <input type="button" value="Verificar" class="input-btn">
    </section>

    <section class="pedidos-container">
      <section class="pedidos" style="height: 40px; font-size: large; border-bottom: 5px solid green; ">
        <section class="pedido-id">Id Pedido</section>
        <section class="pedido-nombre">Nombre menú</section>
        <section class="pedido-comidas">Comidas</section>
        <section class="pedido-estado">Estado</section>
        <section class="pedido-precio">Precio</section>
        <section class="pedido-botones"></section>
      </section>

    </section>

    <script src="../../../Controller/jquery-3.7.0.min.js"></script>
    <script src="../../../Controller/indexEmpleados.js"></script>
</body>
</html>