<?php
// conexion.php
class Conexion {
    private $host = "localhost";
    private $dbname = "usuarios";
    private $username = "root";
    private $password = "";
    private $conn;

    public function conectar() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
}
?>
