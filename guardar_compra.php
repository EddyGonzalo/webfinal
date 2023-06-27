<?php
// Obtener los datos enviados por AJAX
$data = json_decode(file_get_contents('php://input'), true);

// Obtener los valores de la compra
$cantidadAcciones = $data['cantidad'];
$precioCompra = $data['precio'];

// Realizar la conexión a la base de datos (reemplaza los valores con los de tu configuración)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crypto';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die('Error en la conexión a la base de datos: ' . $conn->connect_error);
}

// Preparar la consulta SQL para insertar los datos de la compra
$sql = "INSERT INTO compras (cantidad, precio) VALUES (?, ?)";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Verificar si hubo errores en la preparación de la sentencia
if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . $conn->error);
}

// Asignar los valores a los parámetros de la consulta
$stmt->bind_param('ii', $cantidadAcciones, $precioCompra);

// Ejecutar la sentencia
if ($stmt->execute() === true) {
    // La inserción fue exitosa
    echo 'Compra guardada exitosamente en la base de datos';
} else {
    // Hubo un error en la ejecución de la sentencia
    echo 'Error al guardar la compra en la base de datos: ' . $stmt->error;
}

// Cerrar la conexión y liberar los recursos
$stmt->close();
$conn->close();
?>
