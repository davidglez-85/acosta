<?php
// guardar_datos.php

// Conexión a la base de datos
$conexion = new mysqli("ip_azure", "root", "1234", "prueba"); // Cambia "root" y "1234" según tu configuración

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
}
