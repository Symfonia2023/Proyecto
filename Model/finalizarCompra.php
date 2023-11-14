<?php

session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($_SESSION["usuario"])) {
    echo json_encode(1);
} else {
    echo json_encode(0);
}





?>