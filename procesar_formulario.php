<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');
    $pass = htmlspecialchars($_POST['password'] ?? '');
    $edad = htmlspecialchars($_POST['edad'] ?? '');
    $genero = htmlspecialchars($_POST['genero'] ?? '');
    $aficiones = isset($_POST['aficion']) ? implode(', ', $_POST['aficion']) : 'Ninguna';
    $archivo = isset($_FILES['archivoadjunto']) && $_FILES['archivoadjunto']['error'] === UPLOAD_ERR_OK 
        ? $_FILES['archivoadjunto']['name'] 
        : 'Ninguno';
    $fnacimiento = htmlspecialchars($_POST['fechanacimiento'] ?? '');
    $mensaje2 = htmlspecialchars($_POST['mensaje'] ?? '');

    // Mostrar los datos en un formato elegante
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Datos del Formulario</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                background-color: #f4f4f9;
                color: #333;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #4CAF50;
            }
            p {
                font-size: 1.1em;
                line-height: 1.6;
            }
            .label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Datos del Formulario</h1>
            <p><span class='label'>Nombre:</span> $nombre</p>
            <p><span class='label'>Email:</span> $email</p>
            <p><span class='label'>Mensaje:</span> $mensaje</p>
            <p><span class='label'>Contraseña:</span> $pass</p>
            <p><span class='label'>Edad:</span> $edad</p>
            <p><span class='label'>Género:</span> $genero</p>
            <p><span class='label'>Aficiones:</span> $aficiones</p>
            <p><span class='label'>Archivo Subido:</span> $archivo</p>
            <p><span class='label'>Fecha de Nacimiento:</span> $fnacimiento</p>
            <p><span class='label'>Mensaje Adicional:</span> $mensaje2</p>
        </div>
    </body>
    </html>";
} else {
    echo "No se enviaron datos del formulario.";
}
?>