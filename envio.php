<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Datos del Envío Recibidos</h2>
    
    <?php
    
    $nombre = $_GET['nombre'];
    $direccion = $_GET['direccion'];
    $telefono = $_GET['telefono'];
    $correo = $_GET['correo'];
    $notificaciones = isset($_GET['notificaciones']) ? 'Sí' : 'No';
    $tipo_cliente = $_GET['tipo_cliente'];
    $prioridad = $_GET['prioridad'];
    $instrucciones = !empty($_GET['instrucciones']) ? $_GET['instrucciones'] : 'Ninguna';

 
    echo "<table>
        <tr><th>Campo</th><th>Valor</th></tr>
        <tr><td>Nombre Completo</td><td>$nombre</td></tr>
        <tr><td>Dirección de Entrega</td><td>$direccion</td></tr>
        <tr><td>Teléfono</td><td>$telefono</td></tr>
        <tr><td>Correo Electrónico</td><td>$correo</td></tr>
        <tr><td>Notificaciones por Correo</td><td>$notificaciones</td></tr>
        <tr><td>Tipo de Cliente</td><td>$tipo_cliente</td></tr>
        <tr><td>Prioridad de Envío</td><td>$prioridad</td></tr>
        <tr><td>Instrucciones Especiales</td><td>$instrucciones</td></tr>
    </table>";
    ?>

</body>
</html>
