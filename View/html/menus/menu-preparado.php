<?php

require_once '../../../Controller/obtenerMenus.php';
// Función para mostrar los menús
function mostrarMenus($menus, $tituloTipoMenu) {
    echo "<h2 class='tituloTipoMenu'>$tituloTipoMenu</h2>";
    echo "<section class='item-content'>";

    foreach ($menus as $menu) {
        echo "<section class='menu-container'>";
        echo "<section class='fotoMenu'></section>";
        echo "<section class='tituloMenu'>";
        echo "<h2>{$menu['nombre_menu']}<br><h3>{$menu['tipo_menu']} | {$menu['dieta_menu']}</h3></h2>";
        echo "</section>";
        echo "<section class='botonesMenu'>";
        echo "<button class='botonMenu' onclick='verComidas({$menu['id_menu']})'>Ver Comidas</button>";
        echo "<button class='botonMenu' onclick='agregarAlCarrito({$menu['id_menu']}, \"{$menu['nombre_menu']}\", {$menu['precio']})'>Añadir al Carrito</button>";
        echo "</section>";
        echo "</section>";
    }

    echo "</section>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/menus/menu-preparado.css">
    <link rel="icon" href="../../resources/LogoSYMFONIA.png" type="image/png">
    <title>Menus Preparados</title>
</head>
<body>
    
    <nav>
        <ul>
            <li class="nav-logo"><img src="../../resources/logo_web.svg" width="200px"><p class="nombre-logo">SISVIANSA</p></li>

            <section>
                <li><a href="../../../index.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="#">Comprar Menú</a>
                    <ul class="dropdown-content">
                        <li class="dropdown-content-item"><a href="../menus/menu-preparado.php">Menús Preparados</a></li>
                    </ul>
                </li>
                <li><a href="../preguntas-frecuentes.php">Preguntas Frecuentes</a></li>    
            </section>

            <section>
                <li class="dropdown">
                    <a href="#" style="padding: 0.2rem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                    </a>
                    <?php
                        session_start(); // Iniciar la sesión

                        // Verificar si la variable de sesión 'usuario' está definida
                        if (isset($_SESSION['usuario'])) {
                            // Usuario autenticado
                            // Mostrar elementos cuando la sesión está establecida
                        ?>
                            <ul class="dropdown-content">
                                <li class="dropdown-content-item" id="cerrarSesion"><a href="../../../Model/cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        <?php
                        } else {
                            // Usuario no autenticado
                            // Mostrar elementos cuando la sesión no está establecida
                        ?>
                            <ul class="dropdown-content">
                                <li class="dropdown-content-item" id="login"><a href="../login-registro/login.php">Login</a></li>
                                <li class="dropdown-content-item" id="registroCliente"><a href="../login-registro/registro-cliente.php">Registro Cliente</a></li>
                                <li class="dropdown-content-item" id="registroEmpresa"><a href="../login-registro/registro-empresa.php">Registro Empresa</a></li>
                            </ul>
                        <?php
                        }
                    ?>
                </li>
                <li>
                    <a href="../carrito.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                    </a>
                </li>
            </section>
        </ul>
    </nav>

    <section id="section-menu-semanal">
        <h1 id="menu-semanal-title">Menús Semanales</h1>
        <section class="sectionMenu-content">
            <?php mostrarMenus($menusSemanalEstandares, "Menús Estándar"); ?>
            <?php mostrarMenus($menusSemanalVegetarianos, "Menús Vegetarianos"); ?>
            <?php mostrarMenus($menusSemanalVeganos, "Menús Veganos"); ?>
            <?php mostrarMenus($menusSemanalCeliacos, "Menús Celíacos"); ?>
            <?php mostrarMenus($menusSemanalOvolactovegetarianos, "Menús Ovolactovegetarianos"); ?>
        </section>
    </section>

    <section id="section-menu-quincenal">
        <h1 id="menu-quincenal-title">Menús Quincenales</h1>
        <section class="sectionMenu-content">
            <?php mostrarMenus($menusQuincenalEstandares, "Menús Estándar"); ?>
            <?php mostrarMenus($menusQuincenalVegetarianos, "Menús Vegetarianos"); ?>
            <?php mostrarMenus($menusQuincenalVeganos, "Menús Veganos"); ?>
            <?php mostrarMenus($menusQuincenalCeliacos, "Menús Celíacos"); ?>
            <?php mostrarMenus($menusQuincenalOvolactovegetarianos, "Menús Ovolactovegetarianos"); ?>
        </section>
    </section>

    <section id="section-menu-mensual">
        <h1 id="menu-mensual-title">Menús Mensuales</h1>
        <section class="sectionMenu-content">
            <?php mostrarMenus($menusMensualEstandares, "Menús Estándar"); ?>
            <?php mostrarMenus($menusMensualVegetarianos, "Menús Vegetarianos"); ?>
            <?php mostrarMenus($menusMensualVeganos, "Menús Veganos"); ?>
            <?php mostrarMenus($menusMensualCeliacos, "Menús Celíacos"); ?>
            <?php mostrarMenus($menusMensualOvolactovegetarianos, "Menús Ovolactovegetarianos"); ?>
        </section>
    </section>

    
    <footer>
        <section class="footer-content">
            <section class="footer-item">
                <p class="footer-titulo">
                    SOBRE NOSOTROS
                </p>
                <p>
                    Bienvenido a SISVIANSA, tu opción de confianza para disfrutar de comidas saludables y deliciosas sin sacrificar tiempo ni sabor. En SISVIANSA, creemos en la importancia de una alimentación equilibrada y deliciosa, y nos esforzamos por ofrecer soluciones gastronómicas que se adapten a tu estilo de vida ocupado.
                </p>       
            </section>
            <section class="footer-item">
                <p class="footer-titulo">
                    CONTACTO
                </p>
                <section class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="#6FB85E" class="bi bi-telephone-fill icon" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                      <p>22154532</p>
                </section>     
                <section class="icon-container"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" fill="#6FB85E" class="bi bi-envelope-fill icon" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg>
                      <p>sisviansa@gmail.com</p>
                </section>
                <section class="icon-container">       
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6FB85E" class="bi bi-geo-alt-fill icon" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                      <p>Avenida 18 de Julio 1523, esq. Vázquez</p>
                </section>
            </section>
            <section class="footer-item">
                <p class="footer-titulo">
                    SISVIANSA
                </p>    
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo eum voluptatem natus.
                </p>
            </section>
        </section>
    </footer>


    <script src="../../../Controller/jquery-3.7.0.min.js"></script>
    <script src="../../../Controller/comidasYcarrito.js"></script>
    <script src="../../js/menusPreparados.js"></script>
</body>
</html>