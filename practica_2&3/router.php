<?php
require_once 'controllers/usuariocontroller.php';

$controller = new UsuarioController();

$action = $_GET['action'] ?? 'lista';

if ($action === 'lista') {
    $controller->lista();
} elseif ($action === 'insertar') {
    $controller->insertar();
} else {
    echo "Acción no reconocida.";
}
