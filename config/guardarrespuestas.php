<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombresUsuario'];
    $correo = $_POST['correoUsuario'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Realizar la conexión a la base de datos
    require '../config/database.php';
    $db = new Database();
    $conexion = $db->conectar();

    try {
        // Preparar la consulta SQL para insertar los datos en la tabla correspondiente
        $consulta = "INSERT INTO contactenos (nombresUsuario, correoUsuario, asunto, mensaje) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($consulta);

        // Ejecutar la consulta con los datos proporcionados
        $stmt->execute([$nombre, $correo, $asunto, $mensaje]);

        // Verificar si se insertaron correctamente los datos
        if ($stmt->rowCount() > 0) {
            header("Location: ../paginas/contactenos.php");
            exit();
        } else {
            echo '<a href="../paginas/contactenos.php">Hubo un problema al guardar los datos. Volver al formulario de contacto</a>';
        } 
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo "Error: El formulario no ha sido enviado.";
}
?>