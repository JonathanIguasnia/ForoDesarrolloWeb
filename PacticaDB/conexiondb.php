<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Nombre del servidor
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "empleados"; // Nombre de la base de datos

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " .mysqli_connect_error());
}
else
echo "Conexion Exitosa"."<br>";
?>