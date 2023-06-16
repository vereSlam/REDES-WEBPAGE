<?php
class Database{
    private $hostname = "15.215.109.208.host.secureserver.net";
    private $database = "infdigital_paginadb";
    private $username = "infdigital_user";
    private $password = "userdatabase123";
    private $charset = "utf8";

    function conectar()
    {
        try{
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset="
        . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($conexion, $this->username, $this->password, $options);
        return $pdo;
        } catch(PDOException $e){
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}
 ?>