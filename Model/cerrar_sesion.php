<?php
session_start(); // Iniciar la sesión
// Eliminar todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();
// Redirigir al usuario a otra página
header("Location: ../View/html/login-registro/login.php");
exit();
?>