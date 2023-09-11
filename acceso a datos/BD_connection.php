<?php
$servername = "localhost";   // Nombre del servidor, "localhost" si se hace en localhost
$username = "root"; // el usuario predeterminado que se crea en localhost en XAMPP es este, de usuario root y password vacia
$password = "";
$database = "symfonia_bd"; // el nombre que le hayan puesto a la base de datos

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);  // Establecer la conexion con la base de datos.

// Verificar conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "La conexion con la base de datos ha sido establecida.";
}

?>