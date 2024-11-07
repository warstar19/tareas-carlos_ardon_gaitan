<?php
require_once 'conexion.php';

class Usuario {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexion())->conectar();
    }

    public function obtenerUsuarios() {
        $sql = "SELECT ID, nombre, apellido, email FROM usuarios";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertarUsuario($nombre, $apellido, $email) {
        $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES (:nombre, :apellido, :email)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
}
