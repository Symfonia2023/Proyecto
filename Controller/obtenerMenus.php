<?php

include '../../../Model/clases/menu.php';

$claseMenu = new menu();

$menusSemanalEstandares = $claseMenu->obtenerMenusPorTipoYDieta('Semanal', 'Estandar');
$menusSemanalVegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Semanal', 'Vegetariana');
$menusSemanalVeganos = $claseMenu->obtenerMenusPorTipoYDieta('Semanal', 'Vegana');
$menusSemanalCeliacos = $claseMenu->obtenerMenusPorTipoYDieta('Semanal', 'Celíaca');
$menusSemanalOvolactovegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Semanal', 'Ovolactovegetariana');

$menusQuincenalEstandares = $claseMenu->obtenerMenusPorTipoYDieta('Quincenal', 'Estandar');
$menusQuincenalVegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Quincenal', 'Vegetariana');
$menusQuincenalVeganos = $claseMenu->obtenerMenusPorTipoYDieta('Quincenal', 'Vegana');
$menusQuincenalCeliacos = $claseMenu->obtenerMenusPorTipoYDieta('Quincenal', 'Celíaca');
$menusQuincenalOvolactovegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Quincenal', 'Ovolactovegetariana');

$menusMensualEstandares = $claseMenu->obtenerMenusPorTipoYDieta('Mensual', 'Estandar');
$menusMensualVegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Mensual', 'Vegetariana');
$menusMensualVeganos = $claseMenu->obtenerMenusPorTipoYDieta('Mensual', 'Vegana');
$menusMensualCeliacos = $claseMenu->obtenerMenusPorTipoYDieta('Mensual', 'Celíaca');
$menusMensualOvolactovegetarianos = $claseMenu->obtenerMenusPorTipoYDieta('Mensual', 'Ovolactovegetariana');


?>