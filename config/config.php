<?php
session_start();
$token = $_POST['token'];
 
if($_SESSION['token'] == $token){
    $nombre = $_POST['nombre'];
    echo "Hola " . $nombre;
}else{
    echo "Has intentado acceder sin cumplir con el token";
}
?>
<?php

define("KEY_TOKEN", "DGR.qfl-125*");

?> 