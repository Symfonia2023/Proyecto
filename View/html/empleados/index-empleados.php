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
      <input type="button" value="Verificar" class="input-btn">
    </section>

    <section class="pedidos-container">
      <section class="pedidos" style="height: 40px">
        <section class="pedido-id">Id Pedido</section>
        <section class="pedido-nombre">Nombre menú</section>
        <section class="pedido-comidas">Comidas</section>
        <section class="pedido-estado">Estado</section>
        <section class="pedido-precio">Precio</section>
        <section class="pedido-botones"></section>
      </section>

      <section class="pedidos">
        <section class="pedido-id">1</section>
        <section class="pedido-nombre">SymfoCombo</section>
        <section class="pedido-comidas">CUADRADO QUE CONTENGA TODAS LAS COMIDAS Y A LA DERECHA HAYA UN BOTON QUE DIGA"Finalizado" JUNTO A CADA COMIDA Y CUANDO TODAS LAS COMIDAS ESTEN EN VERDE SE PUEDE AVANZAR DE ESTADO</section>
        <section class="pedido-estado">En produccion</section>
        <section class="pedido-precio">$5.420</section>
        <section class="pedido-botones"><button id="btnAvanzarEstado">Avanzar estado</button></section>
      </section>

    </section>

    <script src="../../../Controller/jquery-3.7.0.min.js"></script>
    <script src="../../../Controller/indexEmpleados.js"></script>
</body>
</html>