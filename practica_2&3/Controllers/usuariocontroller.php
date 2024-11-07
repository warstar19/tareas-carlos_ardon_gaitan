<?php
require_once 'models/Usuario.php';

class UsuarioController {
    public function lista() {
        $usuario = new Usuario();
        $usuarios = $usuario->obtenerUsuarios();
        require 'views/usuarios/lista.php';
    }

    public function insertar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];

            $usuario = new Usuario();
            $usuario->insertarUsuario($nombre, $apellido, $email);

            header("Location: /tareas-carlos_ardon_gaitan/index.php?action=lista");
            exit();
        }
        require 'views/usuarios/insertar.php';
    }
}
