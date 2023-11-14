<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root"; 
$password = "";
$database = "symfonia_bd"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL
$sql = "
-- Comidas para el menú 'SymfoCombo'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pollo a la Parrilla', '30', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Verduras', '15', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Arroz Blanco', '20', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tarta de Manzana', '45', 'estandar');

-- Comidas para el menú 'EpicCombo'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pasta sin Gluten', '25', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada sin Gluten', '15', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Postre sin Gluten', '30', 'celíaca');

-- Comidas para el menú 'HolaCombo'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada Vegana', '20', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Curry de Lentejas', '40', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Batata Asada', '30', 'vegana');

-- Comidas para el menú 'MundoCombo'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pizza Ovolactovegetariana', '35', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada Mixta', '15', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pastel de Papa con Vegetales', '50', 'Ovolactovegetariana');

-- Comidas para el menú 'VegaCombo'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Lasagna Vegetariana', '45', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Quinoa', '20', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tiramisú Vegetariano', '40', 'vegetariana');

-- Comidas para el menú 'DeliciaExpress'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pechuga a la Plancha', '25', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada César', '15', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Arroz con Vegetales', '30', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Cheesecake', '40', 'estandar');

-- Comidas para el menú 'FestivalGastronómico'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Lasagna sin Gluten', '40', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Quinoa y Espinacas', '20', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Postre de Frutas sin Gluten', '30', 'celíaca');

-- Comidas para el menú 'SaborSaludable'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Cazuela Vegana', '35', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Garbanzos', '20', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Brownie Vegano', '25', 'vegana');

-- Comidas para el menú 'ExquisitoPlacer'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tarta de Papas con Queso', '50', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada Caprese', '15', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Risotto con Champiñones', '40', 'Ovolactovegetariana');

-- Comidas para el menú 'ManjarCultural'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Paella Vegetariana', '45', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada Waldorf', '20', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Flan de Almendras', '30', 'vegetariana');

-- Comidas para el menú 'FusionSinfonia'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Sushi Variado', '50', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Algas', '20', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Sopa Miso', '30', 'estandar');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tempura de Verduras', '40', 'estandar');

-- Comidas para el menú 'ArmoniaCulinaria'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pasta a la Carbonara', '35', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Rúcula y Tomate', '15', 'celíaca');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tiramisú sin Gluten', '40', 'celíaca');

-- Comidas para el menú 'SinfoniaDelicia'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Curry de Garbanzos', '40', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Quinoa con Vegetales', '20', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Helado Vegano', '25', 'vegana');

-- Comidas para el menú 'PlacerVegetariano'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Lasaña de Berenjenas', '45', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada Griega', '20', 'Ovolactovegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Pastel de Espinacas', '30', 'Ovolactovegetariana');

-- Comidas para el menú 'CulturaGourmet'
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Risotto de Hongos', '40', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Ensalada de Frutas con Menta', '15', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Mousse de Chocolate', '30', 'vegetariana');

INSERT INTO estado_menu (nombre_estado) VALUES ('solicitado');
INSERT INTO estado_menu (nombre_estado) VALUES ('en stock');
INSERT INTO estado_menu (nombre_estado) VALUES ('en produccion');
INSERT INTO estado_menu (nombre_estado) VALUES ('envasado');
INSERT INTO estado_menu (nombre_estado) VALUES ('entregado');
INSERT INTO estado_menu (nombre_estado) VALUES ('devuelto');
INSERT INTO estado_menu (nombre_estado) VALUES ('desechado');

INSERT INTO estado_pedido (nombre_estado_pedido) VALUES ('solicitado');
INSERT INTO estado_pedido (nombre_estado_pedido) VALUES ('confirmado');
INSERT INTO estado_pedido (nombre_estado_pedido) VALUES ('enviado');
INSERT INTO estado_pedido (nombre_estado_pedido) VALUES ('entregado');
INSERT INTO estado_pedido (nombre_estado_pedido) VALUES ('rechazado');

INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('SymfoCombo',4,14,0,80000,'semanal','estándar');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('EpicCombo',2,15,0,15000,'semanal','celíaca');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('HolaCombo',3,13,0,11000,'semanal','vegana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('MundoCombo',2,16,0,35000,'semanal','Ovolactovegetariana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('VegaCombo',2,12,0,75000,'semanal','vegetariana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('DeliciaExpress',4,14,0,80000,'quincenal','estándar');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('FestivalGastronómico',2,15,0,15000,'quincenal','celíaca');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('SaborSaludable',3,13,0,11000,'quincenal','vegana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('ExquisitoPlacer',2,16,0,35000,'quincenal','Ovolactovegetariana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('ManjarCultural',2,12,0,75000,'quincenal','vegetariana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('FusionSinfonia',4,14,0,80000,'mensual','estándar');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('ArmoniaCulinaria',2,15,0,15000,'mensual','celíaca');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('SinfoniaDelicia',3,13,0,11000,'mensual','vegana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('PlacerVegetariano',2,16,0,35000,'mensual','Ovolactovegetariana');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu, dieta_menu) VALUES ('CulturaGourmet',2,12,0,75000,'mensual','vegetariana');

INSERT INTO sucursal (nro_sucursal) VALUES (1);
INSERT INTO sucursal (nro_sucursal) VALUES (2);
INSERT INTO sucursal (nro_sucursal) VALUES (3);
INSERT INTO sucursal (nro_sucursal) VALUES (4);
INSERT INTO sucursal (nro_sucursal) VALUES (5);
INSERT INTO sucursal (nro_sucursal) VALUES (6);
INSERT INTO sucursal (nro_sucursal) VALUES (7);

INSERT INTO compone (id_menu, id_comida) VALUES ('1','1');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','2');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','3');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','4');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','17');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','18');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','19');
INSERT INTO compone (id_menu, id_comida) VALUES ('1','20');
INSERT INTO compone (id_menu, id_comida) VALUES ('2','5');
INSERT INTO compone (id_menu, id_comida) VALUES ('2','6');
INSERT INTO compone (id_menu, id_comida) VALUES ('2','7');
INSERT INTO compone (id_menu, id_comida) VALUES ('2','21');
INSERT INTO compone (id_menu, id_comida) VALUES ('2','22');
INSERT INTO compone (id_menu, id_comida) VALUES ('3','8');
INSERT INTO compone (id_menu, id_comida) VALUES ('3','9');
INSERT INTO compone (id_menu, id_comida) VALUES ('3','10');
INSERT INTO compone (id_menu, id_comida) VALUES ('3','24');
INSERT INTO compone (id_menu, id_comida) VALUES ('3','25');
INSERT INTO compone (id_menu, id_comida) VALUES ('4','11');
INSERT INTO compone (id_menu, id_comida) VALUES ('4','12');
INSERT INTO compone (id_menu, id_comida) VALUES ('4','13');
INSERT INTO compone (id_menu, id_comida) VALUES ('4','27');
INSERT INTO compone (id_menu, id_comida) VALUES ('4','28');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','32');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','47');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','14');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','16');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','30');
INSERT INTO compone (id_menu, id_comida) VALUES ('5','31');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','36');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','35');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','34');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','20');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','19');
INSERT INTO compone (id_menu, id_comida) VALUES ('6','18');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','7');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','21');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','22');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','23');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','39');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','38');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','37');
INSERT INTO compone (id_menu, id_comida) VALUES ('7','6');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','42');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','41');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','40');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','26');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','25');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','24');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','8');
INSERT INTO compone (id_menu, id_comida) VALUES ('8','9');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','29');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','28');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','27');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','45');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','44');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','43');
INSERT INTO compone (id_menu, id_comida) VALUES ('9','11');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','32');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','47');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','46');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','14');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','15');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','16');
INSERT INTO compone (id_menu, id_comida) VALUES ('10','30');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','36');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','1');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','4');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','3');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','2');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','33');
INSERT INTO compone (id_menu, id_comida) VALUES ('11','34');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','21');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','7');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','22');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','23');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','39');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','38');
INSERT INTO compone (id_menu, id_comida) VALUES ('12','37');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','10');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','9');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','8');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','24');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','25');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','27');
INSERT INTO compone (id_menu, id_comida) VALUES ('13','40');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','13');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','12');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','11');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','43');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','44');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','45');
INSERT INTO compone (id_menu, id_comida) VALUES ('14','29');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','48');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','31');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','30');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','16');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','15');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','14');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','40');
INSERT INTO compone (id_menu, id_comida) VALUES ('15','42');

INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('pedro@gmail.com','1','Canelones','4215','Maldonado','Barrio Sur','3','104');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (1,'097591000');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (1,'56552902', 'Pedro', 'Jose');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('pedro@gmail.com','cliente','pedro123');

INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('empresa@gmail.com','1','Corteza','1342','Canelones','Centro','0','0');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (2,'092123321');
INSERT INTO empresa (nro_cliente, RUT, nombre_juridico) VALUES (2,'43567872497','Humber S.A');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('empresa@gmail.com','cliente','empresa123');

INSERT INTO usuario (login, rol, contrasenia) VALUES ('52589645','Personal de Administracion','personalAdm123');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('57827476','Jefe de Cocina','jefeCocina123');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('59284752','Gerente','gerente123');

";

// Ejecutar la consulta
if ($conn->multi_query($sql) === TRUE) {
    echo "Los comandos SQL se han ejecutado correctamente.";
    $conn->close();
    header("Location: index.php");
} else {
    echo "Error en la ejecución de los comandos SQL: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
