<?php

// El comando "self::" es para acceder a elementos estaticos de la clase.

class menu {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------

    private $nombre_menu;
    private $precio;
    private $tipo_menu;
    private $stock_minimo;
    private $stock_maximo;
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct() {}
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNombreMenu() {
        return $this->nombre_menu;
    }
    public function setNombreMenu($nombre_menu) {
        $this->validarLongitudNombreMenu($nombre_menu);
        $this->nombre_menu = $nombre_menu;
    }
// --------------------------------------------------------------
    public function getPrecio() {
        return $this->precio;
    }
    public function setPrecio($precio) {
        $this->validarPrecio($precio);
        $this->validarLongitudPrecio($precio);
        $this->precio = $precio;
    }
// --------------------------------------------------------------
    public function getTipoMenu() {
        return $this->tipo_menu;
    }
    public function setTipoMenu($tipo_menu) {
        $this->validarTipoMenu($tipo_menu);
        $this->validarLongitudTipoMenu($tipo_menu);
        $this->tipo_menu = $tipo_menu;
    }
// --------------------------------------------------------------
    public function getStockMinimo() {
        return $this->stock_minimo;
    }
    public function setStockMinimo($stock_minimo) {
        $this->validarStockMinimo($stock_minimo);
        $this->validarLongitudStockMinimo($stock_minimo);
        $this->stock_minimo = $stock_minimo;
    }
// --------------------------------------------------------------
    public function getStockMaximo() {
        return $this->stock_maximo;
    }
    public function setStockMaximo($stock_maximo) {
        $this->validarStockMaximo($stock_maximo);
        $this->validarLongitudStockMaximo($stock_maximo);
        $this->stock_maximo = $stock_maximo;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    
public function obtenerMenusPorTipoYDieta($tipo, $dieta) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $tipoMenu = mysqli_real_escape_string($conn, $tipo);
    $dietaMenu = mysqli_real_escape_string($conn, $dieta);

    $query = "SELECT * FROM menu WHERE tipo_menu = '$tipoMenu' AND dieta_menu = '$dietaMenu'";
    $result = mysqli_query($conn, $query);

    $menus = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $menus[] = $row;
    }

    return $menus;
}

public function obtenerNombresComidasMenu($idMenu) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Obtener IDs de las comidas asociadas al menú
    $query = "SELECT id_comida FROM compone WHERE id_menu = $idMenu";
    $result = mysqli_query($conn, $query);

    $nombresComidas = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $idComida = $row['id_comida'];

        // Obtener nombre de la comida utilizando el ID obtenido
        $queryNombre = "SELECT nombre_comida FROM comida WHERE id_comida = $idComida";
        $resultNombre = mysqli_query($conn, $queryNombre);

        while ($rowNombre = mysqli_fetch_assoc($resultNombre)) {
            $nombresComidas[] = $rowNombre['nombre_comida'];
        }
    }

    mysqli_close($conn);

    return $nombresComidas;
}



// --------------------------------------------------------------
    private function validarTipoMenu($tipo_menu) {
        // Solo puede ser uno de los que ya están definidos; menú semanal, menú quincenal o menú mensual.
    }
// --------------------------------------------------------------
    private function validarStockMinimo($stock_minimo) {
        // No puede ser 0 ni menor a.
        // No puede ser mayor al stock máximo.
    }
// --------------------------------------------------------------
    private function validarStockMaximo($stock_maximo) {
        // No puede ser 0 ni menor a.
        // No puede ser menor al stock mínimo.
    }
// --------------------------------------------------------------
    private function validarLongitudNombreMenu($nombre_menu) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($nombre_menu); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudTipoMenu($tipo_menu) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($tipo_menu); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudPrecio($precio) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($precio); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 6) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudStockMinimo($stock_minimo) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($stock_minimo); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 4) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudStockMaximo($stock_maximo) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($stock_maximo); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 4) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------

}

?>