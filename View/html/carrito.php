<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/carrito.css">
    <link rel="icon" href="../resources/LogoSYMFONIA.png" type="image/png">
    <title>Carrito</title>
</head>
<body>

    <nav>
        <ul>
            <li class="nav-logo"><img src="../resources/logo_web.svg" width="200px"><p class="nombre-logo">SISVIANSA</p></li>

            <section>
                <li><a href="../../index.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="#">Comprar Menú</a>
                    <ul class="dropdown-content">
                        <li class="dropdown-content-item"><a href="../html/menus/menu-preparado.php">Menús Preparados</a></li>
                    </ul>
                </li>
                <li><a href="../html/preguntas-frecuentes.php">Preguntas Frecuentes</a></li>    
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
                                <li class="dropdown-content-item" id="cerrarSesion"><a href="../../Model/cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        <?php
                        } else {
                            // Usuario no autenticado
                            // Mostrar elementos cuando la sesión no está establecida
                        ?>
                            <ul class="dropdown-content">
                                <li class="dropdown-content-item" id="login"><a href="login-registro/login.php">Login</a></li>
                                <li class="dropdown-content-item" id="registroCliente"><a href="login-registro/registro-cliente.php">Registro Cliente</a></li>
                                <li class="dropdown-content-item" id="registroEmpresa"><a href="login-registro/registro-empresa.php">Registro Empresa</a></li>
                            </ul>
                        <?php
                        }
                    ?>
                </li>
                <li>
                    <a href="carrito.php" style="padding: 0.5rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                    </a>
                </li>
            </section>
        </ul>
    </nav>


    <div id="mensajeEmergente" style="display: none;" class="mensaje-emergente">
        Menú eliminado
    </div>

<section class="carrito-container">
    <section class="carrito-section">
        <?php

        // Verifica si la variable de sesión 'carrito' está definida
        if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
            // Itera sobre los menús en el carrito
            foreach ($_SESSION['carrito'] as $menu) {
                echo '<section class="menu-carrito">';
                echo '<section class="menu-icon"><img src="../resources/logo_web.svg" width="100px"></section>';
                echo '<section class="menu-nombre">' . $menu['nombre'] . '</section>';
                echo '<section class="menu-cantidad">x' . $menu['cantidad'] . '</section>';
                echo '<section class="menu-precio">$' . $menu['precio'] . '</section>';
                echo '<section class="menu-btnEliminar"><button onclick="eliminarMenu(' . $menu['id'] . ',' . $menu['cantidad'] . ')">Eliminar</button></section>';
                echo '</section>';
            }
        } else {
            echo '<p>El carrito está vacío.</p>';
        }
        ?>
    </section>
</section>



    <footer>
        <section class="footer-content">
            <section class="footer-item">
                <p class="footer-titulo">
                    SOBRE NOSOTROS
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo eum voluptatem natus.
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
    

    <script src="../../Controller/jquery-3.7.0.min.js"></script>
    <script src="../../Controller/carrito.js"></script>
</body>
</html>