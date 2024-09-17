<?php
include 'db.php';  // Incluir la conexión a la base de datos

try {
    // Preparar y ejecutar la consulta para obtener todos los socios
    $stmt = $conn->prepare("SELECT * FROM Socios");
    $stmt->execute();
    
    // Obtener todos los resultados en forma de un array asociativo
    $socios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al obtener los socios: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Socios</title>
</head>
<body>
    <h2>Lista de Socios</h2>
    <table>
        <thead>
            <tr>
                <th>ID Socio</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socios as $socio): ?>
            <tr>
                <td><?php echo $socio['id_socio']; ?></td>
                <td><?php echo $socio['nombre']; ?></td>
                <td><?php echo $socio['documento']; ?></td>
                <td><?php echo $socio['mail']; ?></td>
                <td><?php echo $socio['fecha_nacimiento']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
