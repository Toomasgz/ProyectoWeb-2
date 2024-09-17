<?php
$host = "localhost";
$dbname = "club embajadores";  // Nombre de la base de datos
$username = "root";         // Nombre de usuario (ajústalo si es necesario)
$password = "";             // Contraseña (ajústalo si es necesario)

try {
    // Crear la conexión a la base de datos
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar para que PDO arroje excepciones en caso de error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
