<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
</head>
<body>
    <h2>Datos Recibidos</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $provincia = $_POST["provincia"];
        $comentarios = $_POST["comentarios"];

        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
        echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Provincia:</strong> " . htmlspecialchars($provincia) . "</p>";
        echo "<p><strong>Comentarios:</strong><br>" . htmlspecialchars($comentarios) . "</p>";
    } else {
        echo "<p>No se han recibido datos del formulario.</p>";
    }
    ?>

    <p><a href="javascript:history.back()">Volver al formulario</a></p>
</body>
</html>