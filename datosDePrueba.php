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
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('pepe@gmail.com','1','pedro celestino','4215','benito','Barrio Sur','3','104');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('jose@gmail.com','0','ruperto perez','1912','martinez','Palermo','','');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('Jen@gmail.com','1','Mercedes','2412','coronel','Belvedere','1','150');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('lorena@gmail.com','0','18 de julio','2352','ejido','La teja','','');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('abigail@gmail.com','0','Dionisio coronel','7472','Mercedes','Maroñas','','');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('francoAmesi@gmail.com','1','Av. Mercedes','4251','Unión','Libertad','','');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('martinG@gmail.com','1','pedro celestino','7664','Esq. Maldonado','Barrio Norte','6','108');
INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('gastonxdsito.gg@gmail.com','0','Hector Perez','1302','Esq. Luis Pedro','Barrio Sur','2','108');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (1,'097585831');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (2,'091583982');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (2,'094563674');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (3,'097584283');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (4,'095284788');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (6,'093575231');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (8,'097591000');
INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES (8,'091582056');
INSERT INTO empresa (nro_cliente, RUT, nombre_juridico) VALUES (1,'43567872497','Humber S.A');
INSERT INTO empresa (nro_cliente, RUT, nombre_juridico) VALUES (2,'87535092497','Chen');
INSERT INTO empresa (nro_cliente, RUT, nombre_juridico) VALUES (3,'43254362497','El Duende');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (4,'55432151', 'Pepe', 'Díaz');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (5,'55293953', 'Abigail', 'Gularte');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (6,'53458762', 'Franco', 'Antunes');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (7,'55421432', 'Martin', 'Gallo');
INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES (8,'55478964', 'Gastón', 'Galeano');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Fideos con tuco', '60', 'normal');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Milanesa de berenjena al horno', '90', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tacos de zanahoria', '45', 'vegana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Tarta de brócoli', '90', 'vegetariana');
INSERT INTO comida (nombre_comida, tiempo_elaboracion, tipo_dieta) VALUES ('Milanesa de pollo con puré de papa', '70', 'normal');
INSERT INTO caja (fecha_vencimiento, fecha_elaboracion) VALUES ('2023-07-04','2023-09-04');
INSERT INTO caja (fecha_vencimiento, fecha_elaboracion) VALUES ('2023-07-09','2023-09-09');
INSERT INTO caja (fecha_vencimiento, fecha_elaboracion) VALUES ('2023-08-14','2023-10-14');
INSERT INTO caja (fecha_vencimiento, fecha_elaboracion) VALUES ('2023-08-26','2023-10-26');
INSERT INTO caja (fecha_vencimiento, fecha_elaboracion) VALUES ('2023-08-28','2023-10-28');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('435678724970','cliente','Hola1234');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('875350924970','cliente','52443');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('432543624970','cliente','PepeSi');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('55432151','cliente','HolaComoAndas');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('55293953','cliente','AdiosMeVoy');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('53458762','cliente','TelevisionTV');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('55421432','cliente','Inglis');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('55478964','cliente','Spaniol');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('56525638','Gerente','1234');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('52589645','Personal de Administracion','123');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('57827476','Jefe de Cocina','12');
INSERT INTO usuario (login, rol, contrasenia) VALUES ('59284752','Gerente','1');
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
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu) VALUES ('SymfoCombo Menu 1',4,14,0,80000,'mensual');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu) VALUES ('EpicCombo Menu 2',2,15,0,15000,'semanal');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu) VALUES ('HolaCombo Menu 3',3,13,0,11000,'semanal');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu) VALUES ('MundoCombo Menu 4',2,16,0,35000,'quincenal');
INSERT INTO menu (nombre_menu, stock_minimo, stock_maximo, stock_actual, precio, tipo_menu) VALUES ('VegaCombo Menu 5',2,12,0,75000,'mensual');
INSERT INTO sucursal (nro_sucursal) VALUES (1);
INSERT INTO sucursal (nro_sucursal) VALUES (2);
INSERT INTO sucursal (nro_sucursal) VALUES (3);
INSERT INTO sucursal (nro_sucursal) VALUES (4);
INSERT INTO sucursal (nro_sucursal) VALUES (5);
INSERT INTO sucursal (nro_sucursal) VALUES (6);
INSERT INTO sucursal (nro_sucursal) VALUES (7);
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO pedido (metodo_pago) VALUES ('MercadoPago');
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (1,8,4);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (2,6,1);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (3,3,4);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (4,7,3);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (5,5,5);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (6,2,7);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (7,4,6);
INSERT INTO selecciona (nro_pedido, nro_cliente, nro_sucursal) VALUES (8,1,4);
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (1, 8, '2023-07-04');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (2, 6, '2023-07-09');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (3, 3, '2023-08-14');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (4, 7, '2023-08-23');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (5, 5, '2023-08-26');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (6, 2, '2023-08-28');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (7, 4, '2023-09-01');
INSERT INTO hace (nro_pedido, nro_cliente, fecha) VALUES (8, 1, '2023-09-04');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (1, 'entregado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (2, 'entregado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (3, 'entregado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (4, 'rechazado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (5, 'enviado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (6, 'enviado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (7, 'confirmado');
INSERT INTO posee (nro_pedido, nombre_estado_pedido) VALUES (8, 'solicitado');
INSERT INTO compone (id_menu, id_comida) VALUES (1, 2);
INSERT INTO compone (id_menu, id_comida) VALUES (1, 4);
INSERT INTO compone (id_menu, id_comida) VALUES (2, 1);
INSERT INTO compone (id_menu, id_comida) VALUES (2, 2);
INSERT INTO compone (id_menu, id_comida) VALUES (3, 5);
INSERT INTO compone (id_menu, id_comida) VALUES (3, 4);
INSERT INTO compone (id_menu, id_comida) VALUES (3, 2);
INSERT INTO compone (id_menu, id_comida) VALUES (4, 1);
INSERT INTO compone (id_menu, id_comida) VALUES (4, 2);
INSERT INTO compone (id_menu, id_comida) VALUES (4, 3);
INSERT INTO compone (id_menu, id_comida) VALUES (4, 4);
INSERT INTO compone (id_menu, id_comida) VALUES (5, 1);
INSERT INTO compone (id_menu, id_comida) VALUES (5, 2);
INSERT INTO compone (id_menu, id_comida) VALUES (5, 3);
INSERT INTO compone (id_menu, id_comida) VALUES (5, 4);
INSERT INTO compone (id_menu, id_comida) VALUES (5, 5);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (1, 2, 1, 8);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (1, 4, 1, 8);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (2, 1, 1, 8);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (2, 2, 2, 6);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (3, 5, 2, 6);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (3, 4, 3, 3);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (3, 2, 3, 3);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (4, 1, 4, 7);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (4, 2, 4, 7);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (4, 3, 5, 5);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (4, 4, 5, 5);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (5, 1, 6, 2);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (5, 2, 6, 2);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (5, 3, 7, 4);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (5, 4, 8, 1);
INSERT INTO contiene (id_menu, id_comida, nro_pedido, nro_cliente) VALUES (5, 5, 8, 1);
INSERT INTO conforma (id_caja, nro_pedido) VALUES (1, 1);
INSERT INTO conforma (id_caja, nro_pedido) VALUES (2, 2);
INSERT INTO conforma (id_caja, nro_pedido) VALUES (3, 3);
INSERT INTO conforma (id_caja, nro_pedido) VALUES (4, 5);
INSERT INTO conforma (id_caja, nro_pedido) VALUES (5, 6);
";

// Ejecutar la consulta
if ($conn->multi_query($sql) === TRUE) {
    echo "Los comandos SQL se han ejecutado correctamente.";
} else {
    echo "Error en la ejecución de los comandos SQL: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
